<?php

use Illuminate\Database\Seeder;

class RecipieTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('recipies')->insert([
            'name' => 'Chole Kulcha Meal',
            'description' => 'Try your all time favourite Chole kulcha with date & tamarind chutney that brings you a happiness',
            'cost' => 120.00,
            'img_thumbnail' => 'https://product-assets.faasos.io/production/product/image_1518504182499_Chole%20Kulcha%20Meal%20%28Tamarind%20Chutney%29.JPG',
            'img' => 'https://product-assets.faasos.io/production/product/image_1518504182499_Chole%20Kulcha%20Meal%20%28Tamarind%20Chutney%29.JPG',
            'availability' => 'In Stock',
            'food_type' => 'Veg',
            'category' => 'Breakfast',
            'available_location' => 'Bangaluru',
            'discount' => 'None'
        ],
        [
            'name' => 'Aloo Paratha Chole & Curd Combo',
            'description' => 'Delicious chole served with aloo paratha and curd is just perfect to begin your day with.',
            'cost' => 145.00,
            'img_thumbnail' => 'https://product-assets.faasos.io/production/product/image_1518503469686_aalu-paratha-curd-chole-combo.JPG',
            'img' => 'https://product-assets.faasos.io/production/product/image_1518503469686_aalu-paratha-curd-chole-combo.JPG',
            'availability' => 'In Stock',
            'food_type' => 'Veg',
            'category' => 'Lunch',
            'available_location' => 'Bangaluru',
            'discount' => 'None' 
        ]);
    }
}
