<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Card extends Model
{
    // cards has many notes
    public function notes()
    {
        // return $this->hasMany('App\Note');
        return $this->hasMany(Note::class);
    }
}
