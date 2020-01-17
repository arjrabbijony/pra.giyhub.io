<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email','Username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
     protected static function boot(){
       parent::boot();
       static::created(function($user){
         $user->profile()->create([
           'title'=>$user->Username,
           'description'=>$user->desc,
         ]);
       });
     }
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function profile()
   {
       return $this->hasOne(\App\Profile::class);
   }

   public function posts(){
     return $this->hasMany(\App\Posts::class);
   }
   public function events(){
    return $this->hasMany(\App\Events::class);
}
}
