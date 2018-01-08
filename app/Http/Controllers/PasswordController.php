<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

class PasswordController extends Controller
{
    public function profile() {
    	return view('editpassword', array('user' => Auth::user()) );
    }

    public function updatePassword(Request $request) {

    	$user = Auth::user();
    	$oldPassword = $request->input('oldPassword');
    	$error = "Current password is not checkhing out";

    	if (Hash::check($oldPassword, $user->password)) {
        	$user->password = Hash::make($request->password);
        	$user->save();
        	return view('editpassword', array('user' => Auth::user()) );    	
        }

    	else {
        	
        	echo '<script language="javascript">';
			echo 'alert("Current password is not matching")';
			echo '</script>';
			return view('editpassword', array('user' => Auth::user()) );

 		}
        
    }
}
