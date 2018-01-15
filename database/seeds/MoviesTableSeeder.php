<?php

use Illuminate\Database\Seeder;
use MoviKyte\Movie;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('movies')->delete();

        //skapa upp 3 exempelfilmer.
        Movie::create(array(
            'id' => '1',
            'title' => 'Star Wars: Episode VIII The Last Jedi',
            'genre' => 'Action',
            'year' => '2017',
            'actors' => 'Luke Skywalker',
            'plot' => 'In a galaxy far away',
            'director' => 'J.J. Abrams',
            'rating' => '',
            'reviews' => '',
        ));
        Movie::create(array(
            'id' => '2',
            'title' => 'Super Babies',
            'genre' => 'Comedy',
            'year' => '2004',
            'actors' => 'Baby O',
            'plot' => 'Super babies to the rescue!',
            'director' => 'Babsan',
            'rating' => '',
            'reviews' => '',
        ));
        Movie::create(array(
            'id' => '3',
            'title' => 'It',
            'genre' => 'Horror',
            'year' => '2016',
            'actors' => 'Clown Clownsson',
            'plot' => 'Red baloon',
            'director' => 'Master Clown',
            'rating' => '',
            'reviews' => '',
        ));
        Movie::create(array(
            'id' => '4',
            'title' => 'Cheescake Factory',
            'genre' => 'Sweety',
            'year' => '2015',
            'actors' => 'Bagarn Bosse',
            'plot' => 'One cheesecake to rule them all',
            'director' => 'Master Bagger',
            'rating' => '',
            'reviews' => '',
        ));
        Movie::create(array(
            'id' => '5',
            'title' => 'Movie 5',
            'genre' => 'Action',
            'year' => '2014',
            'actors' => 'Mambo no 5',
            'plot' => "It's all about 5",
            'director' => 'Master Cinqo',
            'rating' => '',
            'reviews' => '',
        ));
    }
}