<?php

namespace MoviKyte\Http\Controllers\Auth;

use Illuminate\Http\Request;
use MoviKyte\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
	public function __construct() {
		$this->middleware('guest:admin');
	}

    public function showLoginForm() {
    	return view ('auth.admin-login');
    }

    public function login() {
    	//validate

    	//attempt login

    	//if success == true, redirect

    	//if success == false, redirect back


    }
}
