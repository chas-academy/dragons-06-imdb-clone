<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use Image;


class UserController extends Controller
{
    public function profile() {
    	return view('profile', array('user' => Auth::user()) );
    }

    public function updatePic(Request $request) {

    	if ($request->hasFile('image')) {
    		$avatar = $request->file('image');
    		//assigns a random number plus the original file extension
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		//the line below uses image intervention. link pinned on slack
    		//this also changes the image size and names it after the random time number assigned above
    		Image::make($avatar)->resize(100, 100)->save( public_path('/uploads/profile/' . $filename));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()));

    }

    public function updateName() {

        
        return view('profile', array('user' => Auth::user()) );
    }
}
