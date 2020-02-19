<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class FoodType extends Model
{
    protected $table = 'food_type';
    public function list_Food(){
    	return $this->hasMany('App/Food','type_id','id');
    }
}
