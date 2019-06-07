<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;


class Account extends Model
{
    
    use Notifiable;


    protected $fillable = [
        'name', 'phone', 'country', 'email',  'password',
    ];

}
