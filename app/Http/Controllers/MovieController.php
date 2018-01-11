<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use MoviKyte\Movie; //lägg till
use MoviKyte\Review; 
use Session; //läg till den oxå

class MovieController extends Controller
{
    //koppa innehållet till michals movie controller när han pushat


    public function index()
    {   
        //hämta ut alla reviews genom att skapa en var med alla reviews i .
        $reviews = Review::paginate(2);

        //returnera en view med alla posterna för reviews.
        return view('review')->withReviews($reviews);

    }

    public function create()
    {
        $reviews = Review::paginate(2);

        return view('review')->withReviews($reviews);
    }

    public function store(Request $request)
    {
        //validera datan
        $this->validate($request, [
            'title' => 'required|max:255',
            'body' => 'required'
        ]);

        //spara  i databasen
        $review = new Review;

        $review->title = $request->title;
        $review->body = $request->body;
 
        $review->save();

        Session::flash('success', 'The review is saved');

    }
        
        //hämta datan från databasen och visa den med show

    public function show($id) 
    {
        $review = Review::find($id);
        $reviews = Review::paginate(2);
        return view('review')->with([
            'review' => $review,
            'reviews' => $reviews
        ]);
    
        
    }

    public function edit()
    {
           //validate the data
           $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required'
        ));

        //save the data to the database
        $review = Review::find($id);

        $review->title = $request->input('title');
        $review->body = $request->input('body');

        $review->save();

        //set flash data with success message
        Session::flash('success', 'This review was successfully saved.');

        //redirect with flash data to review
        return redirect()->route('review',$review->id);
    }

}
