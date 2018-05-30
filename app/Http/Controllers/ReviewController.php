<?php

namespace Moviekyte\Http\Controllers;

use Illuminate\Http\Request;
use Moviekyte\Review;

class ReviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    public function test(Request $request)
    {

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validatedRequest = $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
            'rating' => 'required|max:100|min:0',
            'movie_id' => 'required',
            'author_id' => 'required',
        ));

        if (!$validatedRequest) {
            return back()->with('error', 'Your review is missing something. Please check all fields and try again');
        } else {
            Review::create([
                'title' => $request->title,
                'body' => $request->body,
                'rating' => $request->rating,
                'movie_id' => $request->movie_id,
                'author_id' => $request->author_id
            ]);
            return back()->with('success', 'Review added!');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, array(
            'title' => 'required|max:255',
            'body' => 'required',
            'rating' => 'required|numeric|max:100|min:0'
        ));

        $review = Review::find($id);

        $review->title = $request->input('title');
        $review->body = $request->input('body');
        $review->rating = $request->input('rating');

        $review->save();

        return back()->with('message', 'Successfully updated review');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $review = Review::find($id);

        $review->delete();
        return back()->with('message', 'Successfully deleted review');
    }
}
