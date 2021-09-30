<?php

namespace App\Http\Controllers\Admin;

use App\Charts\userchart;
use App\Http\Controllers\Controller;
use App\Models\Blog\Blog;
use App\Models\Blog\Blogkategori;
use App\Models\Forms\Contact;
use App\Models\KategoriUrun\Kategori;
use App\Models\KategoriUrun\Urun;
use App\Models\Siparis\Siparis;
use App\Models\Subscribers;
use App\Models\Ticket\Ticket;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function __construct()
{
    $this->middleware('auth:admin');
}

    public function index()
    {
        $sbs = Subscribers::all();
        $blog = Blog::where('yayın',1)->get();
        $blogkategori = Blogkategori::all();
        $iletisimliste = Contact::all();
        $urun = Urun::all();
        $urunkategori = Kategori::all();
        $user = User::all();
        $ticket = Ticket::all();
        $user_dogru = User::where('verified',1)->get();
        $user_false = User::where('verified',0)->get();

        $siparis = Siparis::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $blog = Blog::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $users = User::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');

        $subs = Subscribers::select(DB::raw("COUNT(*) as count"))
            ->whereYear('created_at', date('Y'))
            ->groupBy(DB::raw("Month(created_at)"))
            ->pluck('count');




        $chart = new userchart;
        $chart->labels(['Ocak', 'Subat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Agustos', 'Eylul', 'Ekim', 'Kasım', 'Aralık']);
        $chart->dataset('Oluşturulan Sipariş', 'bar', $siparis)->options([
            'fill' => 'true',
            'borderColor' => '#5174c1'
        ]);

        $chart2 = new userchart;
        $chart2->labels(['Ocak', 'Subat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Agustos', 'Eylul', 'Ekim', 'Kasım', 'Aralık']);
        $chart2->dataset('Başarılı Sonuçlanan Sipariş', 'bar', $blog)->options([
            'fill' => 'true',
            'borderColor' => '#5174c1'
        ]);

        $chart3 = new userchart;
        $chart3->labels(['Ocak', 'Subat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Agustos', 'Eylul', 'Ekim', 'Kasım', 'Aralık']);
        $chart3->dataset('Oluşturulan Kullanıcı Sayısı ', 'bar', $users)->options([
            'fill' => 'true',
            'borderColor' => '#5174c1'
        ]);

        $chart4 = new userchart;
        $chart4->labels(['Ocak', 'Subat', 'Mart', 'Nisan', 'Mayıs', 'Haziran', 'Temmuz', 'Agustos', 'Eylul', 'Ekim', 'Kasım', 'Aralık']);
        $chart4->dataset('Aktif Destek Biletleri', 'bar', $subs)->options([
            'fill' => 'true',
            'borderColor' => '#5174c1'
        ]);
        return view('backend.adminpanel',compact('sbs','blog','blogkategori','iletisimliste','urun','urunkategori','user','user_dogru','user_false','ticket','chart','chart2','chart3','chart4'));
    }
}
