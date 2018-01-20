<?php

use Illuminate\Database\Seeder;
use MoviKyte\Admin;

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
            'email' => 'admin@movikyte.com',
            'password' => 'secret',
        ));
    }
}
