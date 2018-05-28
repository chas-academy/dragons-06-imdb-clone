<?php

namespace Moviekyte;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
        public function user()
    {
    return $this->belongsTo('Moviekyte\User');
    }
}
