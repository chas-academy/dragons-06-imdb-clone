<?php

namespace MoviKyte;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'bio' //add image here as well even though it has a default value?
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function watchlists()
    {
        return $this->hasMany('MoviKyte\WatchList');
    }

    public function reviews()
    {
        return $this->hasMany('MoviKyte\Review');
    }
}
