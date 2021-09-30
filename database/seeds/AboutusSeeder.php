<?php

use Illuminate\Database\Seeder;
use App\Tema\Aboutus;

class AboutusSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $about = new Aboutus();
        $about->id = 1;

        $about->save();
    }
}
