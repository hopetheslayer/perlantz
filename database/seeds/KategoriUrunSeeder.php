<?php

use Illuminate\Database\Seeder;

class KategoriUrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        DB::table('kategori_urun')->truncate();

        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'1']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'2']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'3']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'4']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'5']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'6']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'7']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'8']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'9']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'10']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'11']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'12']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'13']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'5','urun_id'=>'14']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'15']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'16']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'17']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'18']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'19']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'20']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'1','urun_id'=>'21']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'22']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'23']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'24']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'25']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'26']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'27']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'28']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'29']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'30']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'31']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'32']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'33']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'34']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'35']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'36']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'4','urun_id'=>'37']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'38']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'39']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'40']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'41']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'42']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'43']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'44']);
        DB::table('kategori_urun')->insert(['kategori_id'=>'2','urun_id'=>'45']);




        DB::statement('SET FOREIGN_KEY_CHECKS=1;');
    }
}
