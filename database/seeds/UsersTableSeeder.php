<?php

//se adiciona la siguiente linea de codigo
use App\User;

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Se crearan 12 usuarios
        factory(User::class, 12)->create();
    }
}
