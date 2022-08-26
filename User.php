<?php

namespace App;

use Illuminate\Notifications\Notifiable;
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
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function role(){
        return $this->hasOne(role::class);
    }

    public function college(){
        return $this->hasOne(college::class);
    }
    public function news(){
        return $this->hasOne(news::class);
    }
    public function payment(){
        return $this->hasOne(payment::class);
    }
    public function student(){
        return $this->hasOne(student::class);
    }
    public function teacher(){
        return $this->hasOne(teacher::class);
    }
    public function message(){
        return $this->hasOne(message::class);
    }



}
