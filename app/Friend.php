<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Friend extends Model
{
   // use HasApiTokens, Notifiable;

    protected $fillable = ['user_id', 'friend_id'];

    protected $hidden = ['id','user_id'];
 
    public function users(){
      return $this->hasOne('App\User', 'user_id', 'friend_id');
    }


}
