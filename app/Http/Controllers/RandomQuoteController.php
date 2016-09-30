<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Quote;

class RandomQuoteController extends Controller
{
    public function index()
    {
      return view('randomQuote');
    }


}
