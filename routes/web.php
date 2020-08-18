<?php

use Illuminate\Support\Facades\Route;
use  App\Event;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    // $events = Event::all();
    //$events::all();
    //Event::destroy([16,14]);

   $events = Event::all();
   return view('events/index', compact('events'));
});
