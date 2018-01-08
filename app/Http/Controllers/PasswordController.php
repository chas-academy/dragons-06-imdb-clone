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

        $user->password = Hash::make($request->password);
        $user->save();
        return view('editpassword', array('user' => Auth::user()) );
        
    }
}
