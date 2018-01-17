<?php

namespace MoviKyte\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use MoviKyte\User;
use MoviKyte\Movie;
use MoviKyte\Watchlist;

use Auth;
use Image;


class UserController extends Controller
{
    public function profile() {
    	return view('editprofile', array('user' => Auth::user()) );
    }

    public function updateUser(Request $request) {

    	if ($request->hasFile('image')) {

    		$profilePic = $request->file('image');
    		//assigns a random number plus the original file extension
    		$filename = Auth::user()->email . '.' . $profilePic->getClientOriginalExtension();
    		//the line below uses image intervention. link pinned on slack
    		//this changes the image size and saves it with the filename
    		Image::make($profilePic)->resize(100, 100)->save( public_path('/uploads/profile/' . $filename));

    		$user = Auth::user();
    		$user->image = $filename;
    		$user->save();
    	} else if ($request){

            $user = Auth::user();
            $user->bio = $request->bio;
            $user->name = $request->name;
            $user->save();

        }

    	return view('editprofile', array('user' => Auth::user()));

	}

	public function showUserWatchlist(){

		// $watchlist = DB::table('watch')->where('user_id', '=', Auth::user()->id)->get();
		$user = Auth::user();
		$watchlists = $user->watchlists;

		$movies = [];
		foreach ($watchlists as $watchlist) {
			array_push($movies, Movie::find($watchlist->movie_id));
		}

		return view('watchlist', compact('movies'));
	}

	public function addToWatchlist($movieId, $userId){
		
		// $request = DB::table('watch')->where('id', '=', Auth::user()->id)->insert();
		DB::table('watchlists')->insert([
		'user_id' => $userId,
		'movie_id' => $movieId
		]);

	}
	public function deleteFromWatchlist($movieId, $userId){
		DB::table('watchlists')->delete([
		'user_id' => $userId,
		'movie_id' => $movieId
		]);
	}
    public function display() {
        
           $users = Users::selectRaw("name, email, bio")->get();
           $data = [
                'user' => @user
           ];
           return view('admin', $data);
	}

}
