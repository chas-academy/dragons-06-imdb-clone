<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function create()
    {
        return view('review');
    }

    public function store(Request $request)
    {       //validera datan
       $this->validate($request, array(
           'title' => 'required',
           'body'=> 'requuired'
       ));
            //spara datan i databas
            $review = new Review;

            $review->title = $request->title;
            $review->body = $request->body;

            $review->save();
    }

}

