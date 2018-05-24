<?php

namespace MoviKyte;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    //
    protected $table = 'actors';

    public function actor()
    {
        return $this->hasMany('App\Movie');
    }
}
