<?php

namespace Moviekyte\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Moviekyte\Http\Controllers\Controller;
use Auth;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin');
    }

    public function showLoginForm()
    {
        return view('auth.admin-login');
    }

    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required' //add min:6 or min:8 or w/e
        ]);
        //attempt login via the Auth facade, also no need to hash as 'attempt' sees to that
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended(route('admin.dashboard'));
        }
        return redirect()->back()->withInput($request->only('email', 'remember'));
    }
}
