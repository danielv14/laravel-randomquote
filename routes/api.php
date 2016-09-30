<?php

use Illuminate\Http\Request;

use App\Quote;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// return a random quote
Route::get('/random', function() {
  return Quote::inRandomOrder()->first();
});
