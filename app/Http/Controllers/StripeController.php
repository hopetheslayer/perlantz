<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Stripe;
use Toastr;

class StripeController extends Controller
{
    public function stripe()
    {
        return view('stripe');
    }

    public function stripePost(Request $request)
    {
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create ([
            "amount" => '368',
            "currency" => "EUR",
            "source" => $request->stripeToken,
            "description" => "Perlantz Denemeee",
        ]);

        Toastr::success('xd','Warning');

        return back();
    }
}
