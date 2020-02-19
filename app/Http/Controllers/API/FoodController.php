<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Food;
class FoodController extends Controller
{
    public function getListFood(Request $request){
        if($request->query('food_type')==''){
            $Food = Food::all();
            $result = [
                'success'   => true,
                'food'    => $Food
            ];
            return response()->json($result);
        }
            $foodTypeID = $request->query('food_type');
            $Food = Food::where('type_id', $foodTypeID)->get()->random(10);
            $result = [
                'success'   => true,
                'food'    => $Food
        ];
            return response()->json($result);
    }
}
