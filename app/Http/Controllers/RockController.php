<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Rockstar;


class RockController extends Controller {

    /**
    * Responds to requests to GET /rockstars
    */

    public function getIndex() {

        //$numberOfRockStars = $request->get('rockstars');


        $rockstars = Rockstar::all();
        //$rockstars = Rockstar::lists('birthDate');
        //dd($rockstars);

         return view('rockstars', ['rockstars' => $rockstars]);

        //return view('rockstars');

    }

}
