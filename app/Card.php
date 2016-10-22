<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Card
 *
 * @property integer $id
 * @property string $title
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Note[] $notes
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereTitle($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Card whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Card extends Model
{
    // cards has many notes
    public function notes()
    {
        // return $this->hasMany('App\Note');
        return $this->hasMany(Note::class);
    }
}
