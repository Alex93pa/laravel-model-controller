<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function index() {
        
        $movieData = [
            'movies' => Movie::all()
        ];
        return view('movie', $movieData);
    }
}
