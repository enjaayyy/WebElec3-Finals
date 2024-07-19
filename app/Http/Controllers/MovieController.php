<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Movie;
use App\Models\Director;
use App\Models\Actor;
use App\Models\Rating;

class MovieController extends Controller{

    public function allmovies(){
        $movies = Movie::with(['directors', 'actrors', 'genres', 'ratings'])->get();
        return response()->json($movies);
    }

    public function movieindex($id){
        $movies = Movie::with(['directors', 'actrors', 'genres', 'ratings'])->get();
        return response()->json($movies);
    }

    public function getDirector($id){
        $director = Director::with('movies')->findOrFail($id);
        return response()->json($director);
    }

    public function getActor($id){
        $actors = Actor::with('movies')->findOrFail($id);
        return response()->json($actors);
    }
    
    public function getMovieWithGenre(){
        $movies = Movie::with('genres')->get();
        return response()->json($movies);
    }

    public function getMovieWithRate(){
        $movies = Movie::with('ratings')->get();
        return response()->json($movies);
    }


}
