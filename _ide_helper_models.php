<?php
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App{
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
	class Card extends \Eloquent {}
}

namespace App{
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
	class Note extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property string $remember_token
 * @property \Carbon\Carbon $created_at
 * @property \Carbon\Carbon $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $unreadNotifications
 * @method static \Illuminate\Database\Query\Builder|\App\User whereId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereName($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereEmail($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User wherePassword($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereRememberToken($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property integer $userType
 * @method static \Illuminate\Database\Query\Builder|\App\User whereUserType($value)
 */
	class User extends \Eloquent {}
}

