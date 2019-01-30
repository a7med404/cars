<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    # 	id 	name 	color 	body_type 	km_driven 	price 	transmission 	drivetrain 	fuel 	cylinder_count 	seats_number 	doors_number 	note 	visibility 	status 	customer_id 	address_id 	engine_id 	brand_id 	user_id 	created_at 	updated_at 
    protected $table = "cars";
    protected $fillable = [
        'id', 'name', 'color', 'body_type', 'km_driven', 'price', 'transmission', 'drivetrain', 'fuel', 'cylinder_count', 'seats_number', 'doors_number', 'level', 'note', 'for_sale_rent', 'visibility', 'status', 'customer_id', 'engine_id', 'brand_id', 'address_id', 'user_id'
    ];

    public function carImages(){
        return $this->HasMany('App\CarImage');
    }
    
    public function brand(){
        return $this->BelongsTo('App\Brand');
    }

    public function engine(){
        return $this->BelongsTo('App\Engine');
    }

    public function customer(){
        return $this->BelongsTo('App\Customer');
    }

    public function user(){
        return $this->BelongsTo('App\User');
    }

    public function address(){
        return $this->hasOne('App\Address');
    }

    public function features(){
        return $this->BelongsToMany('App\Feature', 'feature_car');
    }

}
