<?php

use Illuminate\Database\Seeder;
use MoviKyte\Genre;

class GenreTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genres')->delete();

        Genre::create(array(
            'genre_title' => 'horror',
        ));
        Genre::create(array(
            'genre_title' => 'comedy',
        ));
        Genre::create(array(
            'genre_title' => 'action',
        ));
        Genre::create(array(
            'genre_title' => 'adventure',
        ));
        Genre::create(array(
            'genre_title' => 'drama',
        ));
        Genre::create(array(
            'genre_title' => 'musical',
        ));
        Genre::create(array(
            'genre_title' => 'western',
        ));
        Genre::create(array(
            'genre_title' => 'crime',
        ));
        Genre::create(array(
            'genre_title' => 'kids',
        ));
        Genre::create(array(
            'genre_title' => 'sweety',
        ));
    }
}
