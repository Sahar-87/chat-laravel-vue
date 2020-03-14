<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', 'email', 'password',
    ];

    public function messages(){

        return $this->hasMany(Chat::class);
    }
    protected $hidden = [
        'password', 'remember_token',
    ];
}
