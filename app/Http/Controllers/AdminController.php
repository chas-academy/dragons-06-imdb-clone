<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use MoviKyte\User;
use Auth;

class AdminController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth:admin'); //admin guard to prevent regular use access
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin');
       
    }

    public function editusersform()
    {
        $users = User::all();
        return view('editusers')->with([
               'users' => $users
           ]);
    }

    public function create()
    {
        return view('create');
    }

    public function editmoviesform()
    {
        $movies = Movie::all();
        return view('editmovies')->with([
               'movies' => $movies
           ]);
    }

    public function deletemoviesform()
    {
        $movies = Movie::all();
        return view('deletemovies')->with([
               'movies' => $movies
           ]);
    }

    public function deleteusersform()
    {
        $users = User::all();
        return view('deleteusers')->with([
               'users' => $users
           ]);
    }

    

    
}
