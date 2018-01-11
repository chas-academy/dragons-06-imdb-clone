<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use MoviKyte\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $movies = Movie::latest()->paginate(5);
        return view('movies.index',compact('movies'))
            ->with('i', (request()->input('page',1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('movies.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'id' => 'required',
            'titel' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'actors' => 'required',
            'plot' => 'required',
            'director' => 'required',
            'rating' => 'required', 
            'reviews' => 'required',
        ]);
        Movie::create($request->all());
        return redirect()->route('movies.index')
                        ->with('success', 'Movie created succesfully');
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
        $movie = Movie::find($id);
        return view('movies.edit',compact('movie'));
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
        request()->validate([
            'id' => 'required',
            'titel' => 'required',
            'genre' => 'required',
            'year' => 'required',
            'actors' => 'required',
            'plot' => 'required',
            'director' => 'required', /*-- This maybe need to be on its own table---*/
            'reviews' => 'required', /*-- This maybe need to be on its own table---*/
        ]);
        Movie::find($id)->update($request->all());
        return redirect()->route('movies.index')
                        ->with('success', 'Movie updated succesfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Movie::find($id)->delete();
        return redirect()->route('movies.index')
                        ->with('success','Movie deleted succesfully');
    }
}
