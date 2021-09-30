<?php

use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('urunkategori')->truncate();


        DB::table('urunkategori')->insertGetId(['kategori_adi'=>'RINGS','kategori_resmi'=> '3550.jpg','aciklama'=>null,'slug'=>'rings']);
        DB::table('urunkategori')->insertGetId(['kategori_adi'=>'BRACELETS','kategori_resmi'=> '76.jpg','aciklama'=>null,'slug'=>'bracelets']);
        DB::table('urunkategori')->insertGetId(['kategori_adi'=>'JEWELLERY','kategori_resmi'=> 'banner-5.jpg','aciklama'=>null,'slug'=>'jewellery']);
        DB::table('urunkategori')->insertGetId(['kategori_adi'=>'EARRINGS','kategori_resmi'=> '1377.jpg','aciklama'=>null,'slug'=>'earrings']);
        DB::table('urunkategori')->insertGetId(['kategori_adi'=>'NECKLACES','kategori_resmi'=> '957.jpg','aciklama'=>null,'slug'=>'necklaces']);



        DB::statement('SET FOREIGN_KEY_CHECKS=1;');

    }
}
