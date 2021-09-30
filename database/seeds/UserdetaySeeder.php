<?php

use Illuminate\Database\Seeder;

class UserdetaySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $tema = new \App\Userdetay();

        $tema->id = 1;
        $tema->user_id =1;

        $tema->save();
    }
}
