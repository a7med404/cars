<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{  
    protected $table = "features";
    protected $fillable = [
        'id', 'name', 'parent', 'description', 'status'
    ];

    public function cars(){
        return $this->BelongsToMany('App\Car', 'feature_car');
    }
}
