<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    Schema::table('reviews', function(Blueprint $table) {
        $table->foreign('movie_id')->references('id')->on('movies');
        $table->foreign('author_id')->references('id')->on('users');
      }
}
