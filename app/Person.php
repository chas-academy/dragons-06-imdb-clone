<?php

namespace Moviekyte;

use Illuminate\Database\Eloquent\Model;

class Person extends Model
{
    //
    public function movies()
    {
        return $this->hasMany('Moviekyte\Movie');
    }
}
