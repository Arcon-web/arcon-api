<?php

namespace App;
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Model;

class Game extends Model
{
    use HasApiTokens, Notifiable;

    protected $fillable = ['title', 'description', 'game_image', 'game_link'];

    

}
