<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
        public function home() {
        $movies = Movie::all();
        return view('guest.movies', [
            'movies' => $movies,
        ]);
    }
}
