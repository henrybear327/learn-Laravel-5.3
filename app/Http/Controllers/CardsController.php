<?php
// https://laracasts.com/series/laravel-5-from-scratch/episodes/7

namespace App\Http\Controllers;

use DB;
use App\Card;

use Illuminate\Http\Request;

use App\Http\Requests;

// get all data here, and pass it into the view
class CardsController extends Controller
{
    // use sqlite:
    // touch database.sqlite
    // change config/database.php driver to sqlite -> file-base database

    // migration
    // php artisan make:migration create_cards_table --create=cards
    // php artisan migrate

    // php artisan tinker
    // DB::table('cards')->insert(['title' => 'My second card', 'created_at' => new DateTime, 'updated_at' => new DateTime]);
    // DB::table('cards')->get();
    // DB::table('cards')->get()->first();
    // DB::table('cards')->where('title', 'My first card')->delete()

    // php artisan make:model Card
    // model -> eloquent
    // instance of a model -> a record
    // import by -> use App\Card;

    // use tinker and try App\Card::all(); :)
    public function index()
    {
        // DB query builder
        // $cards = \DB::table('cards')->get(); //use \DB to ask php to find the namespace from global root. If no \DB, App\Http\Controllers\DB will be looked up
        // $cards = DB::table('cards')->get(); //use DB -> at the top

        // eloquent!
        $cards = Card::all();

        return view('cards.index', compact('cards'));
    }

    /*
    // Route::get('cards/{cardID}', 'CardsController@show');
    public function show($id)
    {
        $card = Card::find($id);

        // return $card; // return directly -> JSON!!!!!! WOW! API built! :)
        return view('cards.show', compact('card'));
    }
    */

    // type-hinted
    // Route::get('cards/{card}', 'CardsController@show'); // the {card} must match the model name
    public function show(Card $card)
    {
        // return $card; // return directly -> JSON!!!!!! WOW! API built! :)
        return view('cards.show', compact('card'));
    }
}
