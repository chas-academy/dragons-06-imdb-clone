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
    		$filename = time() . '.' . $avatar->getClientOriginalExtension();
    		//this uses image intervention. link pinned on slack
    		Image::make($avatar)->resize(100, 100)->save( public_path('/uploads/profile/' . $filename));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	}

    	return view('profile', array('user' => Auth::user()));

    }
}
