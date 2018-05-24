<?php

use Illuminate\Database\Seeder;
use MoviKyte\WatchList;

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
