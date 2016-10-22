<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    /*
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
     */
    public function homeYeah() // same as the second argument above
    {
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
    }

    public function hihi()
    {
        return 'hihi!';
    }
}
