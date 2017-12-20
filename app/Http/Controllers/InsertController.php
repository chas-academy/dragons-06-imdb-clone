<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;

class InsertController extends Controller
{
    public function insert(Request $req)
    {
    	$bio = $req->input('bio');

    	$data = array('bio'=>$bio);

    	DB::table('users')->insert($data);
    }
}
