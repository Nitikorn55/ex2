<?php

use \App\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ["name" => "ซื้อของ"],
            ["name" => "ออกกำลังขาย"],
            ["name" => "ท่องเที่ยว"],
        ];

        Category::insert($data);
    }
}
