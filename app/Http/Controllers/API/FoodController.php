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
    public function addNewFood(Request $request){
        $Food = new Food;
        $Food->food_name = $request->food_name;
        $Food->type_id = $request->type_id;
        $Food->food_price = $request->food_price;
        $Food->food_description = $request->food_description;
        $Food->food_img = $request->food_img;

       if (Food::where('food_name', '=', $request->food_name)->exists()) {
            return response()->json([
                'status'    => false,
                'message'   => 'Món đã tồn tại',
            ]);
        }
        $Food->save();
        return response()->json([
                'status'    => true,
                'message'   => 'Thêm món thành công',
            ]);
    }
    public function updateFood(Request $request){
        $foodId = $request->query('food_id');
        $Food = Food::find($foodId,'id');

        $Food->food_name = $request->food_name;
        $Food->type_id = $request->type_id;
        $Food->food_price = $request->food_price;
        $Food->food_description = $request->food_description;
        $Food->food_img = $request->food_img;

        $Food->save();
        return response()->json([
                'status'    => true,
                'message'   => 'Cập nhật thành công',
            ]);
    }
}
