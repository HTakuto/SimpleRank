<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            // Englsh
            // ['name' => 'Electronics', 'code' => 'electronics'],
            // ['name' => 'Books', 'code' => 'books'],
            // ['name' => 'Clothing, Shoes & Jewelry', 'code' => 'clothing'],
            // ['name' => 'Home & Kitchen', 'code' => 'home_kitchen'],
            // ['name' => 'Sports & Outdoors', 'code' => 'sports_outdoors'],
            // ['name' => 'Health & Personal Care', 'code' => 'health_care'],
            // ['name' => 'Automotive', 'code' => 'automotive'],
            // ['name' => 'Toys & Games', 'code' => 'toys_games'],
            // ['name' => 'Beauty & Personal Care', 'code' => 'beauty_care'],
            // ['name' => 'Tools & Home Improvement', 'code' => 'tools_improvement'],
            // ['name' => 'Grocery & Gourmet Food', 'code' => 'grocery_gourmet'],
            // ['name' => 'Musical Instruments', 'code' => 'musical_instruments'],
            // ['name' => 'Office Products', 'code' => 'office_products'],
            // ['name' => 'Pet Supplies', 'code' => 'pet_supplies'],
            // ['name' => 'Baby', 'code' => 'baby'],
            // ['name' => 'Industrial & Scientific', 'code' => 'industrial_scientific'],

            // 日本語
            ['name' => 'ファッション、靴、ジュエリー', 'code' => 'clothing'],
            ['name' => '書籍', 'code' => 'books'],
            ['name' => 'ホーム＆キッチン', 'code' => 'home_kitchen'],
            ['name' => 'スポーツ＆アウトドア', 'code' => 'sports_outdoors'],
            ['name' => '食品＆飲料', 'code' => 'grocery_gourmet'],
            ['name' => 'おもちゃ＆ゲーム', 'code' => 'toys_games'],
            ['name' => '健康＆個人用ケア', 'code' => 'health_care'],
            ['name' => '美容＆パーソナルケア', 'code' => 'beauty_care'],
            ['name' => '自動車', 'code' => 'automotive'],
            ['name' => '工具＆ホーム', 'code' => 'tools_improvement'],
            ['name' => '楽器', 'code' => 'musical_instruments'],
            ['name' => 'オフィス製品', 'code' => 'office_products'],
            ['name' => 'ペット用品', 'code' => 'pet_supplies'],
            ['name' => 'ベビー', 'code' => 'baby'],
        ];

        DB::table('product_categories')->insert($categories);
    }
}
