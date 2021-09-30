<?php



namespace App\Http\Controllers;



use App\Models\Blog\Blog;

use App\Models\KategoriUrun\Kategori;

use App\Tema\TemaAyarları;

use App\User;

use App\Userdetay;



use App\Usershipping;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Hash;



class HomeController extends Controller

{

    /**

     * Create a new controller instance.

     *

     * @return void

     */

    public function __construct()

    {

        $this->middleware('auth');

    }



    /**

     * Show the application dashboard.

     *

     * @return \Illuminate\Contracts\Support\Renderable

     */

    public function index()

    {

        $user_id = auth()->id();



        $user = User::where('id',$user_id)->firstOrFail();









        $temaayar = TemaAyarları::where('id',1)->get();



        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        return view('userbackend.userpanel',compact('temaayar','kategoriler','user'));

    }



    public function profile()

    {

        $user_id = auth()->id();



        $user = User::where('id',$user_id)->firstOrFail();



        $countries = DB::table('countries')->pluck("name","id");



        $temaayar = TemaAyarları::where('id',1)->get();



        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        return view('userbackend.profile.index',compact('user','countries','temaayar','kategoriler'));

    }



    public function getStates($id)

    {

        $states = DB::table("states")->where("countries_id",$id)->pluck("name","id");

        return json_encode($states);

    }





    public function sifreform()

    {

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        $temaayar = TemaAyarları::where('id',1)->get();





        return view('auth.changepassword',compact('kategoriler','temaayar'));

    }



    public function Showcphl(Request $request)

    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {

            // The passwords matches

            return redirect()->back()->with("error","Sistemde tanımlı olan şifreyle şuanki şifreniz aynı degil. Lütfen kontrol ediniz.");

        }



        if(strcmp($request->get('current-password'), $request->get('new-password')) == 0){

            //Current password and new password are same

            return redirect()->back()->with("error","Yeni şifreleriniz Uyuşmuyor. Lütfen kontrol ediniz.");

        }



        //Change Password

        $user = Auth::user();

        $user->password = bcrypt($request->get('new-password'));

        $user->save();



        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->back();

    }







    public function emailform()

    {

        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        $temaayar = TemaAyarları::where('id',1)->get();



        return view('auth.changemail',compact('kategoriler','temaayar'));

    }



    public function mailsjsj(Request $request)

    {

        if (!(Hash::check($request->get('current-password'), Auth::user()->password))) {

            // The passwords matches

            return redirect()->back()->with("error","Sistemde tanımlı olan şifreyle şuanki şifreniz aynı degil. Lütfen kontrol ediniz.");

        }



        if(strcmp($request->get('new-mail'), $request->get('new-mail-confirm')) == 0){

            //Current password and new password are same

            return redirect()->back()->with("error","Yeni şifreleriniz Uyuşmuyor. Lütfen kontrol ediniz.");

        }



        $user = Auth::user();



        $user->email = $request->get('new-mail');



        $user->save();



        if($user->save()==1)

        {

            toastr()->success('Veri Başarıyla Güncellendi :)');

        }









        return redirect()->back();



    }



    public function address()

    {

        $user_id = auth()->id();



        $user = User::where('id',$user_id)->firstOrFail();





        $temaayar = TemaAyarları::where('id',1)->get();



    return view('userbackend.addresses.index',compact('user','temaayar'));

    }



    public function billing ()

    {

        $user_id = auth()->id();



        $userdetay = Userdetay::where('id',$user_id)->firstOrFail();



        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        $temaayar = TemaAyarları::where('id',1)->get();



        return view('userbackend.billing.index',compact('kategoriler','temaayar','userdetay'));

    }



    public function billkaydet(Request $request, $id)

    {

      request()->validate([

            'state' =>'required',

            'country' =>'required',

            'adress'=>'required',

            'adress2'=>'required',

            'firm_name'=>'required',

            'tax_no'=>'required',

            'zipcode'=>'required',

        ]);





        $userdetay = Userdetay::find($id);



        $userdetay->state = request('state');

        $userdetay->country = request('country');

        $userdetay->adress = request('adress');

        $userdetay->adress2 = request('adress2');

        $userdetay->firm_name = request('firm_name');

        $userdetay->taxno = request('taxno');

        $userdetay->zipcode = request('zipcode');



        $userdetay->update();







        toastr()->success('Veri Başarıyla Güncellendi :)');



        return redirect()->route('home');



    }



    public function shipping ()

    {



        $user_id = auth()->id();



        $usershipper = Usershipping::where('id',$user_id)->firstOrFail();



        $kategoriler = Kategori::whereRaw('üst_id is null')->get();



        $temaayar = TemaAyarları::where('id',1)->get();



        return view('userbackend.shipping.index',compact('kategoriler','temaayar','usershipper'));

    }



    public function shipkaydet(Request $request, $id)

    {

        request()->validate([

            'state' =>'required',

            'country' =>'required',

            'adress'=>'required',

            'adress2'=>'required',

            'zipcode'=>'required',

        ]);



        $userdetay = Usershipping::find($id);



        $userdetay->state = request('state');

        $userdetay->country = request('country');

        $userdetay->adress = request('adress');

        $userdetay->adress2 = request('adress2');

        $userdetay->zipcode = request('zipcode');



        $userdetay->update();







        toastr()->success('Veri Başarıyla Güncellendi :)');





        return redirect()->route('home');

    }









}

