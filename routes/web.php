<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// handle the request inline
Route::get('/', function () {
    return view('welcome'); // resources/views/welcome.blade.php -> welcome
});

Route::get('/hi', function() {
    return 'Hi there!';
});

Route::get('/pagesHi', function() {
    //return view('pages.about');
    return view('pages/about');
});


Auth::routes();

// controller -> think of a collection of route closures :)
Route::get('/home', 'HomeController@index');
