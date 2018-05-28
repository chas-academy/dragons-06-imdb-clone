<?php

namespace Moviekyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

use Auth;

class PasswordController extends Controller
{
    public function profile()
    {
        return view('editpassword', array('user' => Auth::user()));
    }

    public function updatePassword(Request $request)
    {
        $user = Auth::user();
        $oldPassword = $request->input('oldPassword');
        $success = "Password changed";
        $error = "Check password";

        if (Hash::check($oldPassword, $user->password)) {
            $user->password = Hash::make($request->password);
            $user->save();
            //print $sucess;
            echo '<script language="javascript">';
            echo 'alert("Password successfully changed")';
            echo '</script>';
            return view('editpassword', array('user' => Auth::user()));
        } else {
            //print $error;
            echo '<script language="javascript">';
            echo 'alert("Check your current password")';
            echo '</script>';
            return view('editpassword', array('user' => Auth::user()));
        }
    }
}
