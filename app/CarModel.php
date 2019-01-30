<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarModel extends Model
{
    protected $table = "car_models";
    protected $fillable = [
        'id', 'name', 'date', 'status', 'brand_id'
    ];
    
    public function brand(){
        return $this->BelongTo('App\Brand');
    }
}
