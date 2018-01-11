<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
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

    public function editusers()
    {
        //return view('admin');
        //$users = User::selectRaw("name, email, bio")->get();
        //   $data = [
        //        'user' => @user
        //   ];
        //   return view('admin', $data);
        $users = User::all();
        return view('editusers')->with([
               'users' => $users
           ]);
    }

    public function updateUser(Request $request) {

        if ($request) {
            $user = User::all()->get();
            $user->bio = $request->bio;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->save();

        }

        return view('editprofile');

    }

}
