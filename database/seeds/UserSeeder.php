<?php

use Illuminate\Database\Seeder;
use App\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User();
        $user->name = 'umut';
        $user->surname = 'derebek';
        $user->email = 'd@d.com';
        $user->password = Hash::make('lol123');
        $user->verified ='1';
        $user->save();
    }
}
