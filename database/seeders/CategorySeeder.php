<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['বাসা-বাড়ি', 'Residential', 'Residential', 1],
            ['বাণিজ্যিক সম্পত্তি', 'Commercial Properties', 'Commercial Properties', 2],
            ['অফিস স্পেস', 'Office Spaces', 'Office Spaces', 3],
            ['ভূমি ও প্লট', 'Land & Plots', 'Land & Plots', 4],
            ['গুদাম', 'Warehouses', 'Warehouses', 5],
            ['অন্যান্য', 'Others', 'Others', 6],
        ];

        foreach ($objects as $object) {
            $obj = new Category();
            $obj->name = $object[0];       // Bangla name
            $obj->name_en = $object[1];   // English name
            $obj->name_ru = $object[2];   // Same as English (or could be translated if needed)
            $obj->slug = Str::slug($object[0]);
            $obj->sort_order = $object[3];
            $obj->save();
        }
    }
}
