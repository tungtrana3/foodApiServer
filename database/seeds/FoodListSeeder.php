<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Food;

class FoodListSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $food = [];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu Thái', 'food_price' =>'1', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu bao tử hầm tiêu xanh', 'food_price' =>'2', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu gà tiềm ớt hiểm', 'food_price' =>'3', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cá đuối lá giang', 'food_price' =>'4', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cá thác lác khổ qua', 'food_price' =>'5', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cá diêu hồng', 'food_price' =>'6', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cua chả cá', 'food_price' =>'7', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu ếch nấu măng ', 'food_price' =>'8', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cua đồng', 'food_price' =>'9', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu mắm', 'food_price' =>'10', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Sting', 'food_price' =>'1', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Cà phê', 'food_price' =>'2', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Bò húc', 'food_price' =>'3', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước lọc pha đường', 'food_price' =>'4', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước mía', 'food_price' =>'5', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Mirinda', 'food_price' =>'6', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Cocacola', 'food_price' =>'7', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước chè', 'food_price' =>'8', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước suối', 'food_price' =>'9', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Soda', 'food_price' =>'10', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt gà nướng', 'food_price' =>'1', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt chó nướng', 'food_price' =>'2', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt êch nướng', 'food_price' =>'3', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt bò nướng', 'food_price' =>'4', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt lợn nướng', 'food_price' =>'5', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt heo nướng', 'food_price' =>'6', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt voi nướng', 'food_price' =>'7', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt vịt nướng', 'food_price' =>'8', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt ngựa nướng', 'food_price' =>'9', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt chuột nướng', 'food_price' =>'10', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Tôm', 'food_price' =>'1', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Cua', 'food_price' =>'2', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' ốc', 'food_price' =>'3', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Ếch', 'food_price' =>'4', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Nghêu', 'food_price' =>'5', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Sò', 'food_price' =>'6', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Hến', 'food_price' =>'7', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Mực', 'food_price' =>'8', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Bạch tuộc', 'food_price' =>'9', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Cá mập', 'food_price' =>'10', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh gato', 'food_price' =>'1', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo sữa', 'food_price' =>'2', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo dẻo', 'food_price' =>'3', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo socola', 'food_price' =>'4', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo dồi chó', 'food_price' =>'5', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh táo', 'food_price' =>'6', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh pudding', 'food_price' =>'7', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh donut', 'food_price' =>'8', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh plan', 'food_price' =>'9', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh xe', 'food_price' =>'10', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/ff/04/80/ff0480bd2ace21ea0353ef3ca9d6cc60.jpg',];


           $i=1;
        // Them vao bang food_list
        foreach ($food as $f) {
            echo "Add Food:  " . $i . "\n";
            App\Food::create($f);
            $i++;
        }
        echo "Done...";
    }
}
