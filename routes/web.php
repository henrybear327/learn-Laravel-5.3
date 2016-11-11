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

// passing arguments
Route::get('/passingData', function() {
    //return view('pages/about'); // dot, slash are both ok
    
    $people = ['Taylor', 'Matt', 'Jeffery'];
    //$people = [];

    // variable passing, at second argument
    return view('pages.passingData', [
        'people' => $people]
    );
    // return view('pages/about', compact('people'));
    // return view('pages/about')->with('people', $people);
    // return view('pages/about')->withPeople($people);
});


// controller
// php artisan help make:controller
Route::get('/homeYeah', 'PagesController@homeYeah'); // second argument, controller name @ method name
Route::get('/hihi', 'PagesController@hihi'); // second argument, controller name @ method name


// Fetching data
Route::get('cards', 'CardsController@index');
Route::get('cards/{card}', 'CardsController@show');




// Auth::routes();
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');



// controller -> think of a collection of route closures :)
Route::get('/home', 'HomeController@index');

Route::get('/admin/application', 'HomeController@application');
