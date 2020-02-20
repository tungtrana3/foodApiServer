<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Food;
class FoodController extends Controller
{
    public function index()
    {
        $listFood = Food::all(); 
        return view('food.danh-sach', compact('listFood'));
    }
}
