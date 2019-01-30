<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FeatureCar extends Model
{
    protected $table = "feature_car";
    protected $fillable = [
        'id', 'feature_id', 'car_id'
    ];
    
}
