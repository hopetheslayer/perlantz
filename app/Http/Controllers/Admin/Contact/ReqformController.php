<?php

namespace App\Http\Controllers\Admin\Contact;


use App\Models\ReqForm;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ReqformController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function show($id)
    {

        $contact = ReqForm::where('id',$id)->firstOrFail();

        return view('backend.contactform.show',compact('contact'));
    }

    public function index()
    {
        $sbs = ReqForm::all();
        return view('backend.contactform.index',compact('sbs'));
    }

    public function sil($id)
    {
        ReqForm::destroy($id);
        toastr()->success('Veri Başarıyla Silindi :)');
        return redirect()->back();
    }
}
