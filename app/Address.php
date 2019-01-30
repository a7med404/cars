<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    protected $table = "addresses";
    protected $fillable = [
        'id', 'city', 'area', 'title'
    ];

    public function car(){
        return $this->BelongsTo('App\Car');
    }

    public function user(){
        return $this->BelongsTo('App\User');
    }
}
