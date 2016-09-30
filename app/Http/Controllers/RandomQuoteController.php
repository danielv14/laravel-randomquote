<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Quote;

class RandomQuoteController extends Controller
{
    public function index()
    {
      $quote = Quote::inRandomOrder()->first();
      return view('randomQuote', compact('quote'));
    }

    /*
    * Function to return a json response for vue.js to pick up
    */
    public function random()
    {
      $quote = Quote::inRandomOrder()->first();
      return response()->json($quote);
    }
}
