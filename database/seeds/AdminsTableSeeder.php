<?php

use Illuminate\Database\Seeder;
use Moviekyte\Admin;

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->delete();

        Admin::create(array(
            'name' => 'admin',
            'email' => 'admin@moviekyte.com',
            'password' => Hash::make('secret'),
        ));
    }
}
