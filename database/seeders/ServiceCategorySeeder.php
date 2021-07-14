<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ServiceCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('service_categories')->insert([
            [
                "name" => 'AC',
                "slug" => 'ac',
                "image" => '1521969345.png'
            ],
            [
                "name" => 'Beauty',
                "slug" => 'beauty',
                "image" => '1521969358.png'
            ],
            [
                "name" => 'Computer',
                "slug" => 'computer',
                "image" => '1521969409.png'
            ],
            [
                "name" => 'Mobile',
                "slug" => 'mobile',
                "image" => '1521969419.png'
            ],
            [
                "name" => 'Water',
                "slug" => 'water',
                "image" => '1521969430.png'
            ],
            [
                "name" => 'HP',
                "slug" => 'hp',
                "image" => '1521969446.png'
            ],
            [
                "name" => 'Acar',
                "slug" => 'acar',
                "image" => '1521969454.png'
            ],
            [
                "name" => 'Compaq',
                "slug" => 'compaq',
                "image" => '1521969464.png'
            ],
            [
                "name" => 'House',
                "slug" => 'house',
                "image" => '1521969622.png'
            ],
            [
                "name" => 'Boat',
                "slug" => 'boat',
                "image" => '1521972593.png'
            ],

        ]);
    }
}
