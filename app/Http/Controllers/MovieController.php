<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use MoviKyte\Movie;
use Image;


class MovieController extends Controller
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
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validator = Validator::make($request->all(), [
            'title' => 'required|unique:movies|max:50',
            'genre' => 'required',
            'year' => 'required|integer',
            'actors' => 'required|max:255',
            'plot' => 'required|max:255',
            'director' => 'required|max:255',
        ]);

        if ($request->hasFile('image')) {
       
        $movie = new Movie();

        $movieImage = $request->file('image');
        //assigns a random number plus the original file extension
        $filename =  time() . '.' . $movieImage->getClientOriginalExtension();
        //the line below uses image intervention. link pinned on slack
        //this changes the image size and saves it with the filename
        Image::make($movieImage)->resize(640, 1136)->save( public_path('/uploads/movie/' . $filename));
        
        $movie->title = $request->title;
        $movie->genre = $request->genre;
        $movie->year = $request->year;
        $movie->actors = $request->actors;
        $movie->plot = $request->plot;
        $movie->director = $request->director;
        $movie->image = $filename;

        $movie->save();


        } else {

            if ($request->hasFile('image')) {


        $movie = new Movie();

            $movie->title = $request->title;
            $movie->genre = $request->genre;
            $movie->year = $request->year;
            $movie->actors = $request->actors;
            $movie->plot = $request->plot;
            $movie->director = $request->director;
            $movie->image = $filename;

            $movie->save();
        }

        if ($validator->fails()) {
            return redirect('admin/create')->withErrors($validator)->withInput();
        } else {
        return Redirect::back()->with('message','Movie added to database');
        }
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
        $movie = Movie::find($id);
        dd($movie);

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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function latest()
    {
        $movies = Movie::all();

        return view('latestMovies')->with('movies', $movies);
    }

    public function editmoviesform()
    {
        $movies = Movie::all();
        return view('editmovies')->with([
               'movies' => $movies
           ]);
    }

    public function editmovies(Request $request) {

        if ($request->hasFile('image')) {
            $movieImage = $request->file('image');
            //assigns a random number plus the original file extension
            $filename =  time() . '.' . $movieImage->getClientOriginalExtension();
            //the line below uses image intervention. link pinned on slack
            //this changes the image size and saves it with the filename
            Image::make($movieImage)->resize(640, 1136)->save( public_path('/uploads/movie/' . $filename));
            //passes the hidden movie form id
            $id = $request->input('id');
            //find the movie with that particular id
            $movie = Movie::find($id);
            //overwrite those values in the corresponding rows
            $movie->title = $request->title;
            $movie->genre = $request->genre;
            $movie->year = $request->year;
            $movie->actors = $request->actors;
            $movie->plot = $request->plot;
            $movie->director = $request->director;
            $movie->image = $filename;

            $movie->save();
        } else {
            //passes the hidden movie form id
            $id = $request->input('id');
            //find the movie with that particular id
            $movie = Movie::find($id);
            //overwrite those values in the corresponding rows
            $movie->title = $request->title;
            $movie->genre = $request->genre;
            $movie->year = $request->year;
            $movie->actors = $request->actors;
            $movie->plot = $request->plot;
            $movie->director = $request->director;

            $movie->save();
        }

        return Redirect::back()->with('message','Movie updated');
    }

}

