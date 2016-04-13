<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoremController extends Controller {

    /**
    * Responds to requests to GET /lorem/create
    */
    public function getCreate() {
        return view('lorem.create');
    }

    /**
    * Responds to requests to GET /lorem/show
    */
    public function postShow(Request $request) {


    }
}
