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

            // English
            // ['name' => 'All Categories', 'code' => 'all_categories'],
            // ['name' => 'Audible & Audiobooks', 'code' => 'audible_audiobook'],
            // ['name' => 'Amazon Devices', 'code' => 'amazon_devices'],
            // ['name' => 'Kindle Store', 'code' => 'kindle_store'],
            // ['name' => 'Prime Video', 'code' => 'prime_video'],
            // ['name' => 'Alexa Skills', 'code' => 'alexa_skills'],
            // ['name' => 'Amazon Subscribe & Save', 'code' => 'subscribe_and_save'],
            // ['name' => 'Digital Music', 'code' => 'digital_music'],
            // ['name' => 'Android Apps', 'code' => 'android_apps'],
            // ['name' => 'Books', 'code' => 'books'],
            // ['name' => 'Spotlight', 'code' => 'spotlight'],
            // ['name' => 'Music', 'code' => 'music'],
            // ['name' => 'Classical', 'code' => 'classical'],
            // ['name' => 'DVD', 'code' => 'dvd'],
            // ['name' => 'Video Games', 'code' => 'video_games'],
            // ['name' => 'Software', 'code' => 'software'],
            // ['name' => 'Computers & Accessories', 'code' => 'computers'],
            // ['name' => 'Electronics', 'code' => 'electronics'],
            // ['name' => 'Stationery & Office Products', 'code' => 'stationery_office_products'],
            // ['name' => 'Home & Kitchen', 'code' => 'home_kitchen'],
            // ['name' => 'Pet Supplies', 'code' => 'pet_supplies'],
            // ['name' => 'Health & Household', 'code' => 'health_household'],
            // ['name' => 'Beauty', 'code' => 'beauty'],
            // ['name' => 'Grocery & Gourmet Food', 'code' => 'grocery_gourmet'],
            // ['name' => 'Baby', 'code' => 'baby'],
            // ['name' => 'Clothing, Shoes & Jewelry', 'code' => 'clothing'],
            // ['name' => 'Women', 'code' => 'womens_fashion'],
            // ['name' => 'Men', 'code' => 'mens_fashion'],
            // ['name' => 'Kids & Baby', 'code' => 'kids_baby'],
            // ['name' => 'Toys & Games', 'code' => 'toys'],
            // ['name' => 'Hobby', 'code' => 'hobby'],
            // ['name' => 'Musical Instruments', 'code' => 'musical_instruments'],
            // ['name' => 'Sports & Outdoors', 'code' => 'sports_outdoors'],
            // ['name' => 'Automotive', 'code' => 'automotive'],
            // ['name' => 'Tools & Home Improvement', 'code' => 'tools'],
            // ['name' => 'Appliances', 'code' => 'appliances'],
            // ['name' => 'Credit Cards', 'code' => 'credit_cards'],
            // ['name' => 'Gift Cards', 'code' => 'gift_cards'],
            // ['name' => 'Industrial & Scientific', 'code' => 'industrial_scientific'],
            // ['name' => 'Amazon Outlet', 'code' => 'amazon_outlet'],

            // 日本語
            ['name' => 'すべてのカテゴリー', 'code' => 'all_categories'],
            ['name' => 'Audible・オーディオブック', 'code' => 'audible_audiobook'],
            ['name' => 'Amazonデバイス', 'code' => 'amazon_devices'],
            ['name' => 'Kindleストア', 'code' => 'kindle_store'],
            ['name' => 'Prime Video', 'code' => 'prime_video'],
            ['name' => 'Alexa スキル', 'code' => 'alexa_skills'],
            ['name' => 'Amazon定期おトク便', 'code' => 'subscribe_and_save'],
            ['name' => 'デジタルミュージック', 'code' => 'digital_music'],
            ['name' => 'Androidアプリ', 'code' => 'android_apps'],
            ['name' => '本', 'code' => 'books'],
            ['name' => '要所', 'code' => 'spotlight'],
            ['name' => 'ミュージック', 'code' => 'music'],
            ['name' => 'クラシック', 'code' => 'classical'],
            ['name' => 'DVD', 'code' => 'dvd'],
            ['name' => 'TVゲーム', 'code' => 'video_games'],
            ['name' => 'PCソフト', 'code' => 'software'],
            ['name' => 'パソコン・周辺機器', 'code' => 'computers'],
            ['name' => '家電＆カメラ', 'code' => 'electronics'],
            ['name' => '文房具・オフィス用品', 'code' => 'stationery_office_products'],
            ['name' => 'ホーム＆キッチン', 'code' => 'home_kitchen'],
            ['name' => 'ペット用品', 'code' => 'pet_supplies'],
            ['name' => 'ドラッグストア', 'code' => 'health_household'],
            ['name' => 'ビューティー', 'code' => 'beauty'],
            ['name' => '食品・飲料・お酒', 'code' => 'grocery_gourmet'],
            ['name' => 'ベビー＆マタニティ', 'code' => 'baby'],
            ['name' => 'ファッション', 'code' => 'clothing'],
            ['name' => 'レディース', 'code' => 'womens_fashion'],
            ['name' => 'メンズ', 'code' => 'mens_fashion'],
            ['name' => 'キッズ＆ベビー', 'code' => 'kids_baby'],
            ['name' => 'おもちゃ', 'code' => 'toys'],
            ['name' => 'ホビー', 'code' => 'hobby'],
            ['name' => '楽器', 'code' => 'musical_instruments'],
            ['name' => 'スポーツ＆アウトドア', 'code' => 'sports_outdoors'],
            ['name' => '車＆バイク', 'code' => 'automotive'],
            ['name' => 'DIY・工具・ガーデン', 'code' => 'tools'],
            ['name' => '大型家電', 'code' => 'appliances'],
            ['name' => 'クレジットカード', 'code' => 'credit_cards'],
            ['name' => 'ギフトカード', 'code' => 'gift_cards'],
            ['name' => '産業・研究開発費用', 'code' => 'industrial_scientific'],
            ['name' => 'Amazonアウトレット', 'code' => 'amazon_outlet'],
        ];

        DB::table('product_categories')->insert($categories);
    }
}
