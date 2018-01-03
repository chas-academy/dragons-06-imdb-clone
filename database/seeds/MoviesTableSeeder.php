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
            'titel' => 'Star Wars: Episode VIII The Last Jedi',
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
            'titel' => 'Super Babies',
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
            'titel' => 'It',
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
            'titel' => 'Cheescake Factory',
            'genre' => 'Sweety',
            'year' => '2015',
            'actors' => 'Bagarn Bosse',
            'plot' => 'One cheesecake to rule them all',
            'director' => 'Master Bagger',
            'rating' => '',
            'reviews' => '',
        ));
    }
}
