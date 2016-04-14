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

        # Get user input from form
        $numberOfParagraphs = $request->input('number');

        #Validate user input

        # Validate user input from form
        $this->validate($request, [
            'number' => 'required|numeric|min:2|max:6'
        ]);

        # Generate number of paragraphs based on user form input
        $generator = new \sixtrillion\LoremIpsum\Generator();
        $paragraphs = $generator->getParagraphs($numberOfParagraphs);
        //echo implode('<p>', $paragraphs);

        return view('lorem.show', ['paragraphs' => $paragraphs]);

    }
}
