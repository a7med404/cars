<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    protected $table = "brands";
    protected $fillable = [
        'id', 'name', 'status', 'image'
    ];
    
    public function cars(){
        return $this->HasMany('App\Car');
    }
}