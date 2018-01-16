<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
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

    public function edit(Request $request) {

        if ($request){

            //$id = Input::get('id');
            $id = $request->input('id');
            $user = User::find($id);//use this for other things!!!
            //$user = User::find('users')->where('id', $id)->first();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->bio = $request->bio;

            $user->save();
        }

        return view('admin');

    }

}
