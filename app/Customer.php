<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Customer extends Authenticatable
{
    protected $table = "customers";
    protected $fillable = [
        'id', 'first_name', 'last_name', 'phone_number', 'email', 'password', 'is_dealer', 'dealer_name', 'status', 'profile_image'
    ];  

    public function cars(){
        return $this->HasMany('App\Car');
    }
}
