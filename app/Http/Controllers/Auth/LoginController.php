<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Sepet\Sepet;
use App\Models\Sepet\SepetUrun;
use Carbon\Carbon;
use Cart;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function loginform()
    {
        return view('auth.login');
    }

    public function authenticated(Request $request, $user)
    {
        $user->update([
            'last_login_at' => Carbon::now()->toDateTimeString(),
            'last_login_ip' => $request->getClientIp()
        ]);

        if (!$user->verified) {
            auth()->logout();
            return back()->with('warning', 'Hesabınızı Kontrol Etmelisiniz. gerekli olan kodu size ulastırdık, lütfen mailnizi kontrol ediniz.');
        }
        return redirect()->intended($this->redirectPath());


    }

    public function login(Request $request)
    {
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);



        if (auth()->attempt(['email' => request('email'), 'password' => request('password')], request()->has('remember'))) {
            request()->session()->regenerate();

            $aktif_sepet_id = Sepet::aktif_sepet_id();

            if (is_null($aktif_sepet_id)) {
                $aktif_sepet_id = Sepet::create(['user_id' => auth()->id()]);
                $aktif_sepet_id = $aktif_sepet_id->id;
            }

            session()->put('aktif_sepet_id', $aktif_sepet_id);



            if (Cart::count() > 0) {
                foreach (Cart::content() as $cartItem) {
                    SepetUrun::updateOrCreate(
                        ['sepet_id' => $aktif_sepet_id, 'urun_id' => $cartItem->id],
                        ['adet' => $cartItem->qty, 'tutar' => $cartItem->price, 'durum' => 'beklemede']
                    );
                }
            }
            Cart::destroy();

            $sepetUrunler = SepetUrun::where('sepet_id', $aktif_sepet_id)->get();
            foreach ($sepetUrunler as $sepetUrun) {
                Cart::add($sepetUrun->urun->id, $sepetUrun->urun->urun_adi, $sepetUrun->adet, $sepetUrun->tutar, ['slug' => $sepetUrun->urun->slug,'urun_resmi'=>$sepetUrun->urun->urun_resmi]);
            }


        }
        return redirect()->intended(route('home'));
    }

}
