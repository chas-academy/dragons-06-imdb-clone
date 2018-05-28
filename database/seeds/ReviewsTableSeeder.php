<?php

use Illuminate\Database\Seeder;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reviews::create(array(

            'movie_id' => 1 ,
            'author_id' => 2 ,
            'title' => 'good shiit' ,
            'body' => 'really good movie indeed' ,
            'rating' => 4

        ));

            'movie_id' => 2 ,
            'author_id' => 2 ,
            'title' => 'good goodie' ,
            'body' => 'gooooooooood' ,
            'rating' => 5

        ));

            'movie_id' => 3 ,
            'author_id' => 2 ,
            'title' => 'good naww' ,
            'body' => 'whaaaaaaaattt' ,
            'rating' => 7

        ));   
        
            'movie_id' => 2 ,
            'author_id' => 3 ,
            'title' => 'splended' ,
            'body' => 'welll okey' ,
            'rating' => 5

        ));

            'movie_id' => 4 ,
            'author_id' => 1 ,
            'title' => 'shiity as fuck' ,
            'body' => 'really bad' ,
            'rating' => 6

        ));


    }
}




