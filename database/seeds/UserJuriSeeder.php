<?php

use App\User;
use Illuminate\Database\Seeder;

class UserJuriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        User::create([
            'username'=> 'juri',
            'password'=> 'juri123456',
            'level'=>1,
        ]);
    }
}
