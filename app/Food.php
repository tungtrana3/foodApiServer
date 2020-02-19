<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Food extends Model
{
    protected $table = 'food_list';
    public function FoodType(){
    	return $this->belongsTo('App/FoodType','type_id','id');
    }
}
