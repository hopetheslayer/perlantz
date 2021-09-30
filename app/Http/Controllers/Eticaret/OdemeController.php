<?php

namespace App\Http\Controllers\Eticaret;

use App\Models\Siparis\Siparis;
use App\Payment;
use App\Tema\TemaAyarları;
use App\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Table;
use Omnipay\Omnipay;
use DB;
use phpDocumentor\Reflection\Types\False_;
use Toastr;
use Cart;
use Illuminate\Http\Request;
use Input;

use Session;
use Stripe;

use App\Http\Controllers\Controller;

class OdemeController extends Controller
{

    public $gateway;

    public function __construct()
    {
        $this->gateway = Omnipay::create('PayPal_Rest');
        $this->gateway->setClientId(env('PAYPAL_CLIENT_ID'));
        $this->gateway->setSecret(env('PAYPAL_CLIENT_SECRET'));
        $this->gateway->setTestMode(true); //set it to 'false' when go live
    }

    public function index(Request $request)
    {
    if(!auth()->check())
    {
        return redirect('login')->with('mesaj_tur','primary')
            ->with('mesaj','You only need to have a user registration to sign in for the order process.');

    }
    else if(count(Cart::content())==0)
    {
        return redirect()->route('anasayfa')->with('mesaj_tur','primary')
            ->with('mesaj','Please Continue your ordering. For the order process , you need have at least 1 product.');
    }

        $temaayar = TemaAyarları::where('id',1)->get();

        $user_id = auth()->id();

        $user = User::where('id',$user_id)->firstOrFail();

        $siparis = $request->session()->get('siparis');



    return view('frontend.odeme.order',compact('temaayar','siparis',$siparis,'user',$user));

    }


    public function order(Request $request)
    {
        $this->validate(request(),[
              'billing_name' => 'required | max:50 ',
              'billing_lastname' => 'required | max:50',
              'billing_company' => 'required | max:50',
              'billing_address' => 'required | max:500',
              'billing_address2' => 'required| max:500 ',
              'billing_phone' => 'required | max:18',
              'billing_email' => 'required',
              'billing_country' => 'required| max:50',
              'billing_state' => 'required| max:50',
              'shipping_name' => 'required| max:50',
              'shipping_lastname' => 'required| max:50',
              'shipping_company' => 'required | max:350',
              'shipping_address' => 'required',
              'shipping_address2' => 'required',
              'shipping_country' => 'required',
              'shipping_state' => 'required',
              'agree1' =>'required|in:0,1',
              'shipping_notes' => 'nullable',

              ],

               [
                       'agree1.required' => 'You should read and agreed distance Sales Agreement and Return Policy.',

                  ]
          );

        $siparis = new Siparis();

        $siparis->checkout = request('checkout');

        $amount = str_replace([',', '.'], ['', ''], Cart::total());



        if($siparis->checkout == 'stripe'){

            try {
                Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
                Stripe\Charge::create ([

                    "amount" => $amount,
                    "currency" => "EUR",
                    "source" => 'tok_visa',
                    "description" => "Perlantz Stripe Rest Api",
                ]);


            }

            catch (\Exception $e) {
                toastr()->error($e->getMessage());
                return redirect()->route('odeme.step1')->with('error', $e->getMessage());
            }
            $siparis->billing_name = request('billing_name');
            $siparis->billing_lastname = request('billing_lastname');
            $siparis->billing_company = request('billing_company');
            $siparis->billing_address = request('billing_address');
            $siparis->billing_address2 = request('billing_address2');
            $siparis->billing_country = request('billing_country');
            $siparis->billing_state = request('billing_state');
            $siparis->billing_phone = request('billing_phone');
            $siparis->billing_email = request('billing_email');
            $siparis->shipping_name = request('shipping_name');
            $siparis->shipping_lastname = request('shipping_lastname');
            $siparis->shipping_company = request('shipping_company');
            $siparis->shipping_address = request('shipping_address');
            $siparis->shipping_address2 = request('shipping_address2');
            $siparis->shipping_country = request('shipping_country');
            $siparis->shipping_state = request('shipping_state');
            $siparis->shipping_notes = request('shipping_notes');
            $siparis['durum'] = "Your order has been reviewed";
            $siparis->sepet_id = session('aktif_sepet_id');
            $siparis->siparis_tutari = $amount;
            $user_id = auth()->id();
            $siparis->user_id = $user_id;
            $siparis->amount = $amount;
            $siparis->currency = 'EUR';
            $siparis->checkout = 'stripe';
            $siparis->payment_status = 'success';
            $siparis->centerstone = request('centerstone');
            $siparis->accentstone = request('accentstone');
            $siparis->perlantzlogo = request('perlantzlogo');
            $siparis->save();



            Cart::destroy();
            session()->forget('aktif_sepet_id');



            toastr()->success('Payment is successful.');
            return  redirect()->route('siparisler');
        }

        elseif ($siparis->checkout == 'paypal')
        {
            try {
                $response = $this->gateway->purchase(array(
                    'amount' => Cart::total(),
                    'currency' => env('PAYPAL_CURRENCY'),
                    'returnUrl' => url('paymentsuccess'),
                    'cancelUrl' => url('paymenterror'),
                ))->send();

                if ($response->isRedirect()) {
                    $response->redirect(); // this will automatically forward the customer
                } else {
                    // not successful
                    return $response->getMessage();
                }
            } catch(Exception $e) {
                return $e->getMessage();
            }
        }

    }

    public function step1(Request $request)
    {
        $siparis = $request->session()->get('siparis');
        return view('frontend.odeme.checkout',compact('siparis',$siparis));

    }

    public function step1checkout(Request $request)
    {
        $siparis = $request->session()->get('siparis');





    }

    public function cancel()
    {
        dd('Your payment is canceled. You can create cancel page here.');
    }

    public function payment_success(Request $request)
    {
        // Once the transaction has been approved, we need to complete it.
        if ($request->input('paymentId') && $request->input('PayerID'))
        {
            $transaction = $this->gateway->completePurchase(array(
                'payer_id'             => $request->input('PayerID'),
                'transactionReference' => $request->input('paymentId'),
            ));
            $response = $transaction->send();

            if ($response->isSuccessful())
            {
                // The customer has successfully paid.
                $arr_body = $response->getData();


                // Insert transaction data into the database
                $isPaymentExist = Payment::where('payment_id', $arr_body['id'])->first();

                if(!$isPaymentExist)
                {
                    $siparis = new Siparis();

                    $siparis->checkout = request('checkout');

                    $amount = str_replace([',', '.'], ['', ''], Cart::total());
                    $siparis->billing_name = request('billing_name');
                    $siparis->billing_lastname = request('billing_lastname');
                    $siparis->billing_company = request('billing_company');
                    $siparis->billing_address = request('billing_address');
                    $siparis->billing_address2 = request('billing_address2');
                    $siparis->billing_country = request('billing_country');
                    $siparis->billing_state = request('billing_state');
                    $siparis->billing_phone = request('billing_phone');
                    $siparis->billing_email = request('billing_email');
                    $siparis->shipping_name = request('shipping_name');
                    $siparis->shipping_lastname = request('shipping_lastname');
                    $siparis->shipping_company = request('shipping_company');
                    $siparis->shipping_address = request('shipping_address');
                    $siparis->shipping_address2 = request('shipping_address2');
                    $siparis->shipping_country = request('shipping_country');
                    $siparis->shipping_state = request('shipping_state');
                    $siparis->shipping_notes = request('shipping_notes');
                    $siparis['durum'] = "Your order has been reviewed";
                    $siparis->sepet_id = session('aktif_sepet_id');
                    $siparis->siparis_tutari = $amount;
                    $user_id = auth()->id();
                    $siparis->user_id = $user_id;
                    $siparis->amount = $amount;
                    $siparis->currency = 'EUR';
                    $siparis->checkout = 'stripe';
                    $siparis->centerstone = request('centerstone');
                    $siparis->accentstone = request('accentstone');
                    $siparis->perlantzlogo = request('perlantzlogo');
                    $siparis->payment_id = $arr_body['id'];
                    $siparis->payer_id = $arr_body['payer']['payer_info']['payer_id'];
                    $siparis->payer_email = $arr_body['payer']['payer_info']['email'];
                    $siparis->amount = $arr_body['transactions'][0]['amount']['total'];
                    $siparis->currency = env('PAYPAL_CURRENCY');
                    $siparis->payment_status = $arr_body['state'];
                    $siparis->checkout = 'paypal';
                    $siparis->save();
                }

                return "Payment is successful. Your transaction id is: ". $arr_body['id'];
            } else {
                return $response->getMessage();
            }
        } else {
            toastr()->error('Transaction is declined');
            return redirect()->route('odeme');

        }
    }

    public function payment_error()
    {

        toastr()->warning('User is canceled the payment.');
        return redirect()->route('odeme');
    }


}
