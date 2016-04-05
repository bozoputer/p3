<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use DB;
use Illuminate\Http\Request;
use App\Rockstar;


class RockController extends Controller {

    /**
    * Responds to requests to GET /rockstars/create
    */
    public function getCreate() {
        return view('rockstars.create');
    }

    /**
    * Responds to requests to GET /rockstars/show
    */
    public function postShow(Request $request) {


        # Get user input from form
        $numberOfRockStars = $request->input('number');

        # Randomly select n-profiles from DB and shuffle them
        $rockstars = collect(Rockstar::all())->random($numberOfRockStars)->shuffle();

        return view('rockstars.show', ['rockstars' => $rockstars]);
    }
}
