<?php

use Illuminate\Database\Seeder;

class UrunSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $urun = new \App\Models\KategoriUrun\Urun();
        $urun->slug = 'venablock';
        $urun->urun_adi = 'Venablock';
        $urun->oz1 = null;
        $urun->oz2 = null;
        $urun->oz3 = null;
        $urun->oz4 = null;
        $urun->aciklama = 'Venablock';
        $urun->fiyat_indirim = 400;
        $urun->fiyat = 250.00;
        $urun->save();

        $urun = new \App\Models\KategoriUrun\Urun();
        $urun->slug = 'veinoff';
        $urun->urun_adi = 'Veinoff';
        $urun->oz1 = null;
        $urun->oz2 = null;
        $urun->oz3 = null;
        $urun->oz4 = null;
        $urun->aciklama = 'Veinoff';
        $urun->fiyat_indirim = 250;
        $urun->fiyat = 150.00;
        $urun->save();

    }
}
