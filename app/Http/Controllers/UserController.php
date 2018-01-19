<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use MoviKyte\Users;
use MoviKyte\User;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Input;
use Auth;
use Image;


class UserController extends Controller
{
    public function profile() {
    	return view('editprofile', array('user' => Auth::user()) );
    }

    public function updateUser(Request $request) {

    	if ($request->hasFile('image')) {

    		$profilePic = $request->file('image');
    		//assigns a random number plus the original file extension
    		$filename = Auth::user()->email . '.' . $profilePic->getClientOriginalExtension();
    		//the line below uses image intervention. link pinned on slack
    		//this changes the image size and saves it with the filename
    		Image::make($profilePic)->resize(100, 100)->save( public_path('/uploads/profile/' . $filename));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	} else if ($request){

            $user = Auth::user();
            $user->bio = $request->bio;
            $user->name = $request->name;
            $user->save();

        }

    	return view('editprofile', array('user' => Auth::user()));

    }

    public function display() {
        
           $users = Users::selectRaw("name, email, bio")->get();
           $data = [
                'user' => @user
           ];
           return view('admin', $data);
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

    public function deleteusersform()
    {
        $users = User::all();
        return view('deleteusers')->with([
               'users' => $users
           ]);
    }

    public function deleteusers(Request $request) {

        $id = $request->input('id');
        $user = User::find($id);

        $user->delete();

        return Redirect::back()->with('message','Movie deleted');

    }


}
