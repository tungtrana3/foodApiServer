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
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu Thái', 'food_price' =>'1', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/c3/7b/86/c37b86892c05a93bb9f8fca4157ae7e3.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu bao tử hầm tiêu xanh', 'food_price' =>'2', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/33/c6/be/33c6be36be758631d774feee1bcd859c.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu gà tiềm ớt hiểm', 'food_price' =>'3', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/73/32/16/73321625cce57c6434d21f2dd2173567.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cá đuối lá giang', 'food_price' =>'4', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/e6/55/f3/e655f334526085256c0838f9d316f7cf.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cá thác lác khổ qua', 'food_price' =>'5', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ca/f6/3d/caf63d100f90c2f78957e6f3cc132435.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cá diêu hồng', 'food_price' =>'6', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/ca/f3/ff/caf3ff0f07ffb28157e90e67dbbf04a6.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cua chả cá', 'food_price' =>'7', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/4a/d4/b5/4ad4b59ad9287507c9540a67749cbef8.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu ếch nấu măng ', 'food_price' =>'8', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/9f/6c/b7/9f6cb79aae0f3524825739034f1e8a94.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu cua đồng', 'food_price' =>'9', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/d2/c9/d2/d2c9d2800ad5e7e3185bc9fc9c2841e2.jpg',];
$food[] = [ 'type_id' =>'2','food_name' =>' Lẩu mắm', 'food_price' =>'10', 'food_description' =>'Đặc sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/3f/95/77/3f9577031ddc4a4ec0f65b3c433c78c0.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Sting', 'food_price' =>'1', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/e5/c5/fb/e5c5fb3415123fbab7c5941c49cf7fc8.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Cà phê', 'food_price' =>'2', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/28/db/52/28db52b3f0fb33f40f4a134951a271f2.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Bò húc', 'food_price' =>'3', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/e9/b7/7b/e9b77b9e184e99027f0905e1984e74eb.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước lọc pha đường', 'food_price' =>'4', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/e1/42/b6/e142b65f134bade441b6e29958b575fa.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước mía', 'food_price' =>'5', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/c6/f6/04/c6f604df8728786fabf1ce150a86eaea.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Mirinda', 'food_price' =>'6', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/a0/e7/7f/a0e77f40c33cb4ecd46e07a22faca76f.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Cocacola', 'food_price' =>'7', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/3c/b9/8e/3cb98eb4c5fb9427836bdf20c017340f.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước chè', 'food_price' =>'8', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/48/a3/9e/48a39e247697a818eec1f81e8388dfa5.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Nước suối', 'food_price' =>'9', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/33/e0/ad/33e0ad62f4140e649c3d2e470cb658eb.jpg',];
$food[] = [ 'type_id' =>'1','food_name' =>' Soda', 'food_price' =>'10', 'food_description' =>'Nước ngọt quê tao', 'food_img' =>'https://i.pinimg.com/236x/ec/fd/c0/ecfdc07b30149c927956fe5bb6126e2c.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt gà nướng', 'food_price' =>'1', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/3a/ab/e6/3aabe6cdbbcb662cb3adb80c0213dfcb.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt chó nướng', 'food_price' =>'2', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/4c/de/88/4cde88b2cdf8ab6acf986bfc6128269b.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt êch nướng', 'food_price' =>'3', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ce/0b/86/ce0b8674f437d3c27d7f3b69ba46a92e.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt bò nướng', 'food_price' =>'4', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/08/eb/4a/08eb4acbf7f500b2676f4a4e7cb9b021.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt lợn nướng', 'food_price' =>'5', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/07/83/9e/07839ebc35fe157833a8b262ad04b01a.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt heo nướng', 'food_price' =>'6', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/d9/51/1b/d9511ba1afb6ed096037d1d1e4f53c99.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt voi nướng', 'food_price' =>'7', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/b6/c4/35/b6c435b88894c8b76cc0cdc52a6326d3.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt vịt nướng', 'food_price' =>'8', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/ab/80/be/ab80be9513b7a9041cb0133c74c00b56.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt ngựa nướng', 'food_price' =>'9', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/41/50/b6/4150b6bcbbaa1d3ca1ad8e5790b52e8e.jpg',];
$food[] = [ 'type_id' =>'3','food_name' =>' Thịt chuột nướng', 'food_price' =>'10', 'food_description' =>'Đồ nướng quê tao', 'food_img' =>'https://i.pinimg.com/236x/14/13/7f/14137fa719394cc0847cd8a86e8401af.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Tôm', 'food_price' =>'1', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/b9/e8/85/b9e885369b7ed4332f97ad0ddddebc00.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Cua', 'food_price' =>'2', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/c8/1e/02/c81e027ac8c23dabaa8bf1aa0fc30a31.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' ốc', 'food_price' =>'3', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/04/4d/7a/044d7aaef77a9eb5151a410261d6b5a8.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Ếch', 'food_price' =>'4', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/6c/69/59/6c695982c9292bb7e2c45bfb96acc71b.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Nghêu', 'food_price' =>'5', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/4a/10/01/4a1001e41fb2d1f4770f0e84aaa0b8f7.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Sò', 'food_price' =>'6', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/a1/31/60/a1316064620ba1e033d20d9d19c40e1e.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Hến', 'food_price' =>'7', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/08/fe/46/08fe4648473d349833e467e6a97dddbf.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Mực', 'food_price' =>'8', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/cb/73/88/cb7388c134bfe15039078d6eb96a6c36.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Bạch tuộc', 'food_price' =>'9', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/f5/81/84/f5818403c41f0891fd8908d0ed0dc4c9.jpg',];
$food[] = [ 'type_id' =>'4','food_name' =>' Cá mập', 'food_price' =>'10', 'food_description' =>'Hải sản quê tao', 'food_img' =>'https://i.pinimg.com/236x/8b/40/19/8b4019a4e21ab9b7b44717ffe6a8964e.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh gato', 'food_price' =>'1', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/df/26/e0/df26e007611f8727ee8df13d499aac0d.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo sữa', 'food_price' =>'2', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/e1/f9/ad/e1f9ada2fc08c7518a59f3823a51e971.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo dẻo', 'food_price' =>'3', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/c7/a6/11/c7a611ec9415afed8ec0dad182a8a3e1.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo socola', 'food_price' =>'4', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/f2/68/43/f26843e90e18d6988c87f6aa75d8e80b.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Kẹo dồi chó', 'food_price' =>'5', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/e4/1d/ad/e41dad1b795b721ee72b04390ebeee0a.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh táo', 'food_price' =>'6', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/f9/7a/ed/f97aed1ac769bd13a8a07327b4831a9e.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh pudding', 'food_price' =>'7', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/1c/81/6b/1c816bd8ea90e61830e0e2fce8f8faf6.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh donut', 'food_price' =>'8', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/b8/d9/49/b8d9491d8fdea57ee389c2ca73695647.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh plan', 'food_price' =>'9', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/e2/bd/4d/e2bd4da08719ce7d2b68e7413d74281b.jpg',];
$food[] = [ 'type_id' =>'5','food_name' =>' Bánh xe', 'food_price' =>'10', 'food_description' =>'Đồ ngọt cũng quê tao nốt', 'food_img' =>'https://i.pinimg.com/236x/60/0f/a3/600fa394980f41718895e18f7d81d252.jpg',];


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
