<?php

use Illuminate\Database\Seeder;
use App\Tema\TemaAyarları;
class TemaAyarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tema = new TemaAyarları();

        $tema->id = 1;

        $tema->save();
    }
}
