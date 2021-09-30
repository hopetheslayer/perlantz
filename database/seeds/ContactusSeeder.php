<?php

use Illuminate\Database\Seeder;

class ContactusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $ilet = new \App\Tema\İletisimAyarları();
        $ilet->id = 1;

        $ilet->save();
    }
}
