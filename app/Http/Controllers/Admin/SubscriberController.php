<?php

namespace App\Http\Controllers\Admin;

use App\Models\Subscribers;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class SubscriberController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {
       $sbs = Subscribers::all();

        return view('backend.subscriber.index',compact('sbs'));
    }

    public function destroy($subscriber)
    {
        $subscriber = Subscribers::findOrFail($subscriber);
        $subscriber->delete();
        Toastr::success('Aboneye Ait Veri Başarıyla Silindi :)','Success');
        return redirect()->back();
    }
}
