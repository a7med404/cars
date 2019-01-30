<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarImage extends Model
{
    protected $table = "car_images";
    protected $fillable = [
        'id', 'image', 'car_id'
    ];
    public function car(){
        return $this->BelongsTo('App\Car');
    }
}
