<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = ['user_id', 'friend_id'];
}
