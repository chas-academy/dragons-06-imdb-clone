<?php

use Illuminate\Database\Seeder;
use Moviekyte\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->delete();

        User::create(array(
            'name' => 'Klara',
            'email' => 'klara@gmail.com',
            'password' => Hash::make('123456'),
        ));

        User::create(array(
            'name' => 'Sven',
            'email' => 'sven@gmail.com',
            'password' => Hash::make('123456'),
        ));

        User::create(array(
            'name' => 'Adam',
            'email' => 'adam@gmail.com',
            'password' => Hash::make('123456'),
        ));
    }
}
