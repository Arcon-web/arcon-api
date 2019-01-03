<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Laravel\Passport\HasApiTokens;

class User extends Authenticatable
{
    use Notifiable;


    use HasApiTokens, Notifiable;

    
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','console_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function console()
    {
        return $this->hasOne('App\Console');
    }

    public function friends()
	{
		return $this->belongsToMany('App\Friend');
	}

	//  public function addFriend(User $user)
	// {
	// 	$this->friends()->attach($user->id);
	// }

	// public function removeFriend(User $user)
	// {
	// 	$this->friends()->detach($user->id);
	// } 
    
}
