<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('/rating/{post}', 'Eticaret\UrunController@postStar')->name('postStar');


Route::get('Admin-Ticket', 'Admin\Ticket\AdminTicketsController@index')->name('admin.ticket');
Route::post('close_ticket/{ticket_id}', 'Admin\Ticket\AdminTicketsController@close')->name('admin.ticket.close');
Route::post('admin_comment', 'Admin\Ticket\AdminTicketsController@postComment')->name('admin.ticket.yorum');
Route::get('tickets/{ticket_id}', 'Admin\Ticket\AdminTicketsController@show')->name('admin.ticket.show');




Route::resource('support-tickets','Tickets\TicketsController');

Route::post('comment', 'Tickets\TicketsController@postComment')->name('ticket.user.yorum');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/denemex','Eticaret\WishlistController@deneme');

Route::get('/frequently-asked-questions','Front\TreatmentController@index')->name('faq');
Route::get('autocomplete', 'Front\TreatmentController@search')->name('autocompleate');
Route::get('/frequently-asked-questions/{id}','Front\TreatmentController@post')->name('faqpost');


Route::get('/faq-categories/{id}','Front\TreatmentController@treatkat')->name('tkategori');



Route::get('/engraving', 'SayfaController@engraving')->name('engraving');
Route::get('/bracelet-size', 'SayfaController@braceletsize')->name('braceletsize');
Route::get('/about-diamonds', 'SayfaController@aboutdiamonds')->name('aboutdiamonds');
Route::get('/about-gemstones', 'SayfaController@aboutgemstones')->name('aboutgemstones');
Route::get('/about-pearls', 'SayfaController@aboutpearls')->name('aboutpearls');
Route::get('/about-rings', 'SayfaController@engagementrings')->name('engagementrings');
Route::get('/wedding-ring-guide', 'SayfaController@weddingringguide')->name('ringguide');
Route::get('/contact-us','SayfaController@contactus')->name('contact-us');
Route::get('/return-form','SayfaController@returnform')->name('return-form');
Route::get('/test', 'SayfaController@test')->name('test');

Route::get('/aboutus','SayfaController@aboutus')->name('aboutus');



Route::get('login','Auth\LoginController@loginform')->name('login');

Route::get('connect-sales','Form\ContactSales@index')->name('sales-team');
Route::get('connect-sales/dropdownlist/getstates/{id}', 'Form\ContactSales@getStates');
Route::post('connect-sales','Form\ContactSales@post')->name('sales-send');


//E Ticaret Linkler



Route::get('/category/{slug_kategoriadi}','Eticaret\KategoriController@index')->name('kategori');



Route::post('/review-product','Front\CommentController@commentstore')->name('yorumyap');
Route::get('/review-product/delete/{id}','Front\CommentController@sil')->name('user.comment.sil');

Route::get('/product/{slug_urunadi}','Eticaret\UrunController@urun')->name('urun');
Route::post('/product-req','Eticaret\UrunController@sendreq')->name('product-sendreq');



Route::get('/order','Eticaret\OdemeController@index')->name('odeme');
Route::post('/order','Eticaret\OdemeController@order')->name('odemeyap');


Route::get('/order/step1','Eticaret\OdemeController@step1')->name('odeme.step1');
Route::post('/order/step1-charge','Eticaret\OdemeController@step1checkout')->name('step1checkout');


Route::get('payment', 'PaymentController@index');
Route::post('charge', 'PaymentController@charge');
Route::get('paymentsuccess', 'Eticaret\OdemeController@payment_success')->name('success.payment');
Route::get('paymenterror', 'Eticaret\OdemeController@payment_error')->name('error.payment');


Route::get('stripe','StripeController@stripe');
Route::post('stripecharge', 'StripeController@stripePost')->name('stripe.post');


Route::get('/requested-order','Eticaret\RequestOrder@index')->name('siparisler');
Route::get('/order-details/{id}','Eticaret\RequestOrder@detay')->name('siparis');




Route::get('connect-sales','Form\ContactSales@index')->name('sales-team');
Route::get('connect-sales/dropdownlist/getstates/{id}', 'Form\ContactSales@getStates');
Route::post('connect-sales','Form\ContactSales@post')->name('sales-send');

Route::prefix('profile')->group(function () {
    Route::get('/', 'HomeController@profile')->name('user.profile');
    Route::get('/dropdownlist/getstates/{id}', 'HomeController@getStates');
    Route::post('/kaydet/{id?}', 'denemecontroller@kaydet')->name('user.profile.kaydet');

});


Route::get('change-password','HomeController@sifreform')->name('user.password');
Route::post('home/change-password','HomeController@Showcphl')->name('sifredegistir');

Route::get('change-email','HomeController@emailform')->name('user.email');
Route::post('home/change-email','HomeController@mailsjsj')->name('emaildegistir');

Route::prefix('deneme')->group(function () {
    Route::post('/kaydet/{id?}', 'denemecontroller@kaydet')->name('dene.profile.kaydet');
});

Route::get('adress','HomeController@address')->name('user.address');

Route::get('edit-shipping-address/{id?}','HomeController@shipping')->name('user.shipper');
Route::post('edit-shipping-address/kaydet/{id?}','HomeController@shipkaydet')->name('user.shipper.kaydet');

Route::get('edit-billing-address/{id?}','HomeController@billing')->name('user.billing');
Route::post('edit-billing-address/kaydet/{id?}','HomeController@billkaydet')->name('user.billing.kaydet');

Route::get('/','SayfaController@index')->name('anasayfa');



Route::get('contact-us','SayfaController@iletisim')->name('contact-us');

Route::post('contact-us','SayfaController@mail')->name('contact.mail.store');

Route::post('subs-us','SayfaController@subs')->name('subs.mail.store');

Route::get('/about-us','SayfaController@hakkimda')->name('about-us');

Route::get('/privacy-policy','SayfaController@privacy')->name('privacy');

Route::get('/terms-&-conditions','SayfaController@terms')->name('terms');

Route::get('/return-policy-&-warranty','SayfaController@return')->name('return');

Route::get('/cookie-policy','SayfaController@cookie')->name('cookie');

Route::get('/user/verify/{token}', 'Auth\RegisterController@verifyUser');



Route::get('/blog','Front\BlogsayfaController@blog')->name('blog');

Route::get('/blog-categories/{id}','Front\BlogsayfaController@blogkat')->name('bkategori');

Route::get('/blog/{id}','Front\BlogsayfaController@post')->name('sblog');

Route::group( ['prefix'=> 'wishlist'],function ()
{
    Route::get('/','Eticaret\WishlistController@index')->name('wishlist');
    Route::post('/ekle','Eticaret\WishlistController@ekle')->name('wishlist.ekle');
    Route::get('/kaldir/{rowid}','Eticaret\WishlistController@kaldir')->name('wishlist.kaldir');
    Route::get('/anasayfa/kaldir/{rowid}','Eticaret\WishlistController@anasayfakaldir')->name('wishlist.anasayfa.kaldir');
    Route::get('/bosalt','Eticaret\WishlistController@bosalt')->name('wishlist.bosalt');
    Route::patch('/guncelle/{rowid}','Eticaret\WishlistController@guncelle')->name('wishlist.blade.php.guncelle');
    Route::post('send-email','Eticaret\WishlistController@mail')->name('wishlist.contact.mail.store');
});

Route::group( ['prefix'=> 'cart'],function ()
{
    Route::get('/','Eticaret\SepetController@sepet')->name('cart');
    Route::post('/ekle','Eticaret\SepetController@ekle')->name('cart.ekle');
    Route::get('/kaldir/{rowid}','Eticaret\SepetController@kaldir')->name('cart.kaldir');
    Route::get('/anasayfa/kaldir/{rowid}','Eticaret\SepetController@anasayfakaldir')->name('cart.anasayfa.kaldir');
    Route::get('/bosalt','Eticaret\SepetController@bosalt')->name('cart.bosalt');
    Route::patch('/guncelle/{rowid}','Eticaret\SepetController@guncelle')->name('cart.guncelle');
});

//Admin Routes
Route::prefix('admin')->group(function () {
    Route::get('/', 'Admin\AdminController@index')->name('admin.dashboard');
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::post('/logout','Auth\AdminLoginController@logout')->name('admin.logout');
});



//Faq yönetim

Route::group(['prefix' => 'Admin-faq'], function ()
{
    Route::match(['get','post'],'/','Admin\Treatment\AdminTreatmentController@index')->name('admin.faq.index');
    Route::get('/yeni','Admin\Treatment\AdminTreatmentController@form')->name('admin.faq.yeni');
    Route::get('/duzenle/{id}','Admin\Treatment\AdminTreatmentController@edit')->name('admin.faq.duzenle');
    Route::post('/kaydet/{id?}','Admin\Treatment\AdminTreatmentController@kaydet')->name('admin.faq.kaydet');
    Route::post('/guncelle/{id?}','Admin\Treatment\AdminTreatmentController@guncelle')->name('admin.faq.guncelle');
    Route::get('/sil/{id}','Admin\Treatment\AdminTreatmentController@sil')->name('admin.faq.sil');
    Route::get('/dropzone/upload/{id}','Admin\Treatment\AdminTreatmentController@dropzone')->name('admin.faq.dosyaekle');
    Route::post('/dropzone/{id?}','Admin\Treatment\AdminTreatmentController@dfilestore')->name('admin.faq.d');
    Route::get('/destroy/{id}','Admin\Treatment\AdminTreatmentController@destroy')->name('admin.faq.sildosya');
});

Route::group(['prefix' => 'Admin-faq-kategori'], function ()
{
    Route::match(['get','post'],'/','Admin\Treatment\AdminKategoriController@index')->name('admin.faqkategori.index');
    Route::get('/yeni','Admin\Treatment\AdminKategoriController@form')->name('admin.faqkategori.yeni');
    Route::get('/duzenle/{id}','Admin\Treatment\AdminKategoriController@edit')->name('admin.faqkategori.duzenle');
    Route::post('/kaydet/{id?}','Admin\Treatment\AdminKategoriController@kaydet')->name('admin.faqkategori.kaydet');
    Route::post('/guncelle/{id?}','Admin\Treatment\AdminKategoriController@guncelle')->name('admin.faqkategori.guncelle');
    Route::get('/sil/{id}','Admin\Treatment\AdminKategoriController@sil')->name('admin.faqkategori.sil');
});

Route::group(['prefix' => 'Admin-contact'], function ()
{
    Route::match(['get','post'],'/','Admin\Contact\ContactController@index')->name('admin.contact.index');
    Route::get('/show/{id}','Admin\Contact\ContactController@show')->name('admin.contact.show');
    Route::get('/sil/{id}','Admin\Contact\ContactController@sil')->name('admin.contact.sil');
});

Route::group(['prefix' => 'Admin-reqform'], function ()
{
    Route::match(['get','post'],'/','Admin\Contact\ReqformController@index')->name('admin.reqform.index');
    Route::get('/show/{id}','Admin\Contact\ReqformController@show')->name('admin.reqform.show');
    Route::get('/sil/{id}','Admin\Contact\ReqformController@sil')->name('admin.reqform.sil');
});



Route::group(['prefix' => 'Admin-urun-kategori'], function ()
{
    Route::match(['get','post'],'/','Admin\Urun\AdminUrunKategoriController@index')->name('admin.urunkategori.index');
    Route::get('/yeni','Admin\Urun\AdminUrunKategoriController@form')->name('admin.urunkategori.yeni');
    Route::get('/duzenle/{id}','Admin\Urun\AdminUrunKategoriController@edit')->name('admin.urunkategori.duzenle');
    Route::post('/kaydet/{id?}','Admin\Urun\AdminUrunKategoriController@kaydet')->name('admin.urunkategori.kaydet');
    Route::post('/guncelle/{id?}','Admin\Urun\AdminUrunKategoriController@guncelle')->name('admin.urunkategori.guncelle');
    Route::get('/sil/{id}','Admin\Urun\AdminUrunKategoriController@sil')->name('admin.urunkategori.sil');
    Route::get('/importExportView', 'Admin\Urun\UrunImporter@importExportView')->name('urunexim');
    Route::get('/export', 'Admin\Urun\UrunImporter@export')->name('urun.export');
    Route::post('/import', 'Admin\Urun\UrunImporter@import')->name('urun.import');
});

Route::group(['prefix' => 'Admin-user'], function ()
{
    Route::match(['get','post'],'/','Admin\User\UserController@index')->name('admin.user');
    Route::get('/yeni','Admin\User\UserController@form')->name('admin.user.yeni');
    Route::get('/duzenle/{id}','Admin\User\UserController@edit')->name('admin.user.duzenle');
    Route::post('/kaydet/{id?}','Admin\User\UserController@kaydet')->name('admin.user.kaydet');
    Route::post('/guncelle/{id?}','Admin\User\UserController@guncelle')->name('admin.user.guncelle');
    Route::get('/sil/{id}','Admin\User\UserController@sil')->name('admin.user.sil');
});

Route::group(['prefix' => 'Admin-urun'], function ()
{
    Route::match(['get','post'],'/','Admin\Urun\AdminUrunController@index')->name('admin.urun');
    Route::get('/yeni','Admin\Urun\AdminUrunController@form')->name('admin.urun.yeni');
    Route::get('/duzenle/{id}','Admin\Urun\AdminUrunController@edit')->name('admin.urun.duzenle');
    Route::post('/kaydet','Admin\Urun\AdminUrunController@kaydet')->name('admin.urun.kaydet');
    Route::post('/guncelle/{id?}','Admin\Urun\AdminUrunController@guncelle')->name('admin.urun.guncelle');
    Route::get('/sil/{id}','Admin\Urun\AdminUrunController@sil')->name('admin.urun.sil');
    Route::get('/dropzone/upload/{id}','Admin\Urun\AdminUrunController@dropzone')->name('admin.urun.dosyaekle');
    Route::post('/dropzone/{id?}','Admin\Urun\AdminUrunController@dfilestore')->name('admin.urun.d');
    Route::get('/destroy/{id}','Admin\Urun\AdminUrunController@destroy')->name('admin.urun.dosya.sil');
    Route::post('/ara','Admin\Urun\AdminUrunController@ara')->name('admin.urun.ara');
});

//BLOG yönetim

Route::group(['prefix' => 'Admin-blog'], function ()
{
    Route::match(['get','post'],'/','Admin\Blog\AdminBlogController@index')->name('admin.blog.index');
    Route::get('/yeni','Admin\Blog\AdminBlogController@form')->name('admin.blog.yeni');
    Route::get('/duzenle/{id}','Admin\Blog\AdminBlogController@edit')->name('admin.blog.duzenle');
    Route::post('/kaydet/{id?}','Admin\Blog\AdminBlogController@kaydet')->name('admin.blog.kaydet');
    Route::post('/guncelle/{id?}','Admin\Blog\AdminBlogController@guncelle')->name('admin.blog.guncelle');
    Route::get('/sil/{id}','Admin\Blog\AdminBlogController@sil')->name('admin.blog.sil');
    Route::get('/dropzone/upload/{id}','Admin\Blog\AdminBlogController@dropzone')->name('admin.blog.dosyaekle');
    Route::post('/dropzone/{id?}','Admin\Blog\AdminBlogController@dfilestore')->name('admin.blog.d');
    Route::get('/destroy/{id}','Admin\Blog\AdminBlogController@destroy')->name('admin.dosya.sil');
});

Route::group(['prefix' => 'Admin-blog-kategori'], function ()
{
    Route::match(['get','post'],'/','Admin\Blog\AdminKategoriController@index')->name('admin.blogkategori.index');
    Route::get('/yeni','Admin\Blog\AdminKategoriController@form')->name('admin.blogkategori.yeni');
    Route::get('/duzenle/{id}','Admin\Blog\AdminKategoriController@edit')->name('admin.blogkategori.duzenle');
    Route::post('/kaydet/{id?}','Admin\Blog\AdminKategoriController@kaydet')->name('admin.blogkategori.kaydet');
    Route::post('/guncelle/{id?}','Admin\Blog\AdminKategoriController@guncelle')->name('admin.blogkategori.guncelle');
    Route::get('/sil/{id}','Admin\Blog\AdminKategoriController@sil')->name('admin.blogkategori.sil');
});

//Admin Sipariş

Route::group(['prefix' => 'Admin-siparis'], function ()
{
    Route::match(['get','post'],'/','Admin\Siparis\SiparisController@index')->name('admin.siparis.index');
    Route::get('/yeni','Admin\Siparis\SiparisController@form')->name('admin.siparis.yeni');
    Route::get('/duzenle/{id}','Admin\Siparis\SiparisController@edit')->name('admin.siparis.duzenle');
    Route::get('/incele/{id}','Admin\Siparis\SiparisController@look')->name('admin.siparis.look');
    Route::post('/kaydet/{id?}','Admin\Siparis\SiparisController@kaydet')->name('admin.siparis.kaydet');
    Route::post('/guncelle/{id?}','Admin\Siparis\SiparisController@guncelle')->name('admin.siparis.guncelle');
    Route::get('/sil/{id}','Admin\Siparis\SiparisController@sil')->name('admin.siparis.sil');
});



Route::get('/admin-tema-ayarlari','Admin\Tema\TemaController@temaayar')->name('admintema.getir');

Route::post('/admin-tema-ayarlari/kaydet/{id?}','Admin\Tema\TemaController@kaydet')->name('admintema.kaydet');
//----------------About Us Controller--------------------------------------------------
Route::get('/admin-aboutus-ayarlari','Admin\Tema\AboutusController@index')->name('admin.aboutus.getir');

Route::post('/admin-aboutus-ayarlari/kaydet/{id?}','Admin\Tema\AboutusController@kaydet')->name('admin.aboutus.kaydet');

//----------------Contact Us Controller--------------------------------------------------
Route::get('/admin-contactus-ayarlari','Admin\Tema\ContactusController@index')->name('admin.contactus.getir');
Route::post('/admin-contactus-ayarlari/kaydet/{id?}','Admin\Tema\ContactusController@kaydet')->name('admin.contactus.kaydet');

//----------------Admin Sayfa Controller--------------------------------------------------
Route::get('/admin-about-diamonds-ayarlari','Admin\Tema\AboutdiamondsController@index')->name('admin.diamonds.getir');
Route::post('/admin-about-diamonds-ayarlari/kaydet/{id?}','Admin\Tema\AboutdiamondsController@kaydet')->name('admin.diamonds.kaydet');

Route::get('/admin-about-gemstone-ayarlari','Admin\Tema\AboutgemstonesController@index')->name('admin.gemstone.getir');
Route::post('/admin-about-gemstone-ayarlari/kaydet/{id?}','Admin\Tema\AboutgemstonesController@kaydet')->name('admin.gemstone.kaydet');

Route::get('/admin-about-pearls-ayarlari','Admin\Tema\AboutpearlsController@index')->name('admin.pearls.getir');
Route::post('/admin-about-pearls-ayarlari/kaydet/{id?}','Admin\Tema\AboutpearlsController@kaydet')->name('admin.pearls.kaydet');

Route::get('/admin-about-pearls-ayarlari','Admin\Tema\AboutpearlsController@index')->name('admin.pearls.getir');
Route::post('/admin-about-pearls-ayarlari/kaydet/{id?}','Admin\Tema\AboutpearlsController@kaydet')->name('admin.pearls.kaydet');

Route::get('/admin-braceletsize-ayarlari','Admin\Tema\braceletsizeController@index')->name('admin.braceletsize.getir');
Route::post('/admin-braceletsize-ayarlari/kaydet/{id?}','Admin\Tema\braceletsizeController@kaydet')->name('admin.braceletsize.kaydet');

Route::get('/admin-engagementrings-ayarlari','Admin\Tema\engagementringsController@index')->name('admin.engagementrings.getir');
Route::post('/admin-engagementrings-ayarlari/kaydet/{id?}','Admin\Tema\engagementringsController@kaydet')->name('admin.engagementrings.kaydet');

Route::get('/admin-weddingrings-ayarlari','Admin\Tema\RingayarController@index')->name('admin.weddingrings.getir');
Route::post('/admin-weddingrings-ayarlari/kaydet/{id?}','Admin\Tema\RingayarController@kaydet')->name('admin.weddingrings.kaydet');

Route::get('/admin-engraving-ayarlari','Admin\Tema\ReturnwarrantyController@index')->name('admin.engraving.getir');
Route::post('/admin-engraving-ayarlari/kaydet/{id?}','Admin\Tema\ReturnwarrantyController@kaydet')->name('admin.engraving.kaydet');





Route::get('/admin/şifredegistir','Admin\Ayar\AyarController@Showcph')->name('admin.sifre.getir');
Route::post('/admin/şifredegistirp','Admin\Ayar\AyarController@Showcph1')->name('admin.sifre.degistir');

Route::get('/admin/emaildegistir','Admin\Ayar\AyarController@mailsj')->name('admin.mail.getir');
Route::post('/admin/emaildegistirp','Admin\Ayar\AyarController@mailsjsj')->name('admin.mail.degistir');

Route::get('/subscriber','Admin\SubscriberController@index')->name('subscriber.index');
Route::delete('/subscriber/{subscriber}','Admin\SubscriberController@destroy')->name('admin.subscriber.destroy');



