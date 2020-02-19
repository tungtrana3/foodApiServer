<?php

use Illuminate\Database\Seeder;

class FoodTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $foodtype=[];
            $foodtype[] = [
                'type_name' => 'Đồ uống',
            ];
            $foodtype[] = [
                'type_name' => 'Lẩu',
            ];
            $foodtype[] = [
                'type_name' => 'Đồ nướng',
            ];
            $foodtype[] = [
                'type_name' => 'Hải sản',
            ];
            $foodtype[] = [
                'type_name' => 'Đồ ngọt',
            ];
            $i = 1;
        // Them vao bang food_type
        foreach ($foodtype as $ft) {
            echo "Add FoodType:  " . $i . "\n";
            App\FoodType::create($ft);
            $i++;
        }
        echo "Done...";
    }
}
