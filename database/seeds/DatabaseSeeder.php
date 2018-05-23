<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Order dependent!
        $this->call([
            MoviesTableSeeder::class,
            AdminsTableSeeder::class,
            UsersTableSeeder::class,
            WatchListsTableSeeder::class
        ]);
    }
}
