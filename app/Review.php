<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;
    
class Review extends Model
{
    

    public function user()
    {
        return $this->belongsTo('Movikyte\User');
    }

    public function movie()
    {
        return $this->belongsTo('movikyte\Movie');
    }
}
