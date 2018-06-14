<?php

use Illuminate\Database\Seeder;

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

        DB::table('genre_movie')->insert(array(
            'movie_id' => '1',
            'genre_id' => '3',
        ));
        DB::table('genre_movie')->insert(array(
            'movie_id' => '2',
            'genre_id' => '2',
        ));
        DB::table('genre_movie')->insert(array(
            'movie_id' => '3',
            'genre_id' => '1',
        ));
        DB::table('genre_movie')->insert(array(
            'movie_id' => '4',
            'genre_id' => '10',
        ));
        DB::table('genre_movie')->insert(array(
            'movie_id' => '5',
            'genre_id' => '3',
        ));

    }
}
