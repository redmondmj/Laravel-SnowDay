<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'vote', 'guest_name', 'guest_school'
    ];

}
