<?php

use Illuminate\Database\Seeder;
use Moviekyte\GenreMovie;

class GenreMovieTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('genre_movie')->delete();

        GenreMovie::create(array(
            'movie_id' => '1',
            'genre_id' => '3',
        ));
        GenreMovie::create(array(
            'movie_id' => '2',
            'genre_id' => '2',
        ));
        GenreMovie::create(array(
            'movie_id' => '3',
            'genre_id' => '1',
        ));
        GenreMovie::create(array(
            'movie_id' => '4',
            'genre_id' => '10',
        ));
        GenreMovie::create(array(
            'movie_id' => '5',
            'genre_id' => '3',
        ));

    }
}
