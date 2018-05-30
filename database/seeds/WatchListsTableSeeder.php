<?php

use Illuminate\Database\Seeder;
use Moviekyte\WatchList;

class WatchListsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        WatchList::create(array(
            'movies' => [1, 2],
            'user_id' => 1
        ));
    }
}
