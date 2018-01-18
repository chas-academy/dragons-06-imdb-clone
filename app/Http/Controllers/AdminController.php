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

    public function edit(Request $request) {

        if ($request){

            //passes the hidden user form id
            $id = $request->input('id');
            //find the user with that particular id
            $user = User::find($id);
            //overwrite those values in the corresponding rows
            $user->name = $request->name;
            $user->email = $request->email;
            $user->bio = $request->bio;

            $user->save();
        }

        return Redirect::back()->with('message','User updated');


    }

}
