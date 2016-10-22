<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Note
 *
 * @property integer $id
 * @property integer $card_id
 * @property string $body
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @method static \Illuminate\Database\Query\Builder|\App\Note whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Note whereCardId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Note whereBody($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Note whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Note whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Note extends Model
{
    // $card = App\Card::first();
    // $note = new App\Note;
    // $note->body = 'Some note for the card';
    // $note->card_id = 2;
    // $note->save();
    // App\Note::all();
}
