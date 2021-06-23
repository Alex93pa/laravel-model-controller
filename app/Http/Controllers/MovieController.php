<?php

namespace App\Http\Controllers;

use App\Models\Movie;

class MovieController extends Controller
{
    public function index() {
        
        $movieData = [
            'movies' => Movie::all()
        ];
        return view('movie', $movieData);
    }
}
