<?php

namespace Database\Seeders;

use App\Models\Option;
use App\Models\Value;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class OptionValueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $options = [
            ['name' => 'তলা', 'name_en' => 'Floor', 'name_ru' => 'Floor', 'sort_order' => 1, 'values' => [
                ['name' => '১', 'name_en' => '1', 'name_ru' => '1', 'sort_order' => 1],
                ['name' => '২', 'name_en' => '2', 'name_ru' => '2', 'sort_order' => 2],
                ['name' => '৩', 'name_en' => '3', 'name_ru' => '3', 'sort_order' => 3],
                ['name' => '৪', 'name_en' => '4', 'name_ru' => '4', 'sort_order' => 4],
                ['name' => '৫', 'name_en' => '5', 'name_ru' => '5', 'sort_order' => 5],
                ['name' => '৬', 'name_en' => '6', 'name_ru' => '6', 'sort_order' => 6],
                ['name' => '৭', 'name_en' => '7', 'name_ru' => '7', 'sort_order' => 7],
                ['name' => '৮', 'name_en' => '8', 'name_ru' => '8', 'sort_order' => 8],
                ['name' => '৯', 'name_en' => '9', 'name_ru' => '9', 'sort_order' => 9],
                ['name' => '১০', 'name_en' => '10', 'name_ru' => '10', 'sort_order' => 10],
            ]],
            ['name' => 'কক্ষ', 'name_en' => 'Room', 'name_ru' => 'Room', 'sort_order' => 2, 'values' => [
                ['name' => '১', 'name_en' => '1', 'name_ru' => '1', 'sort_order' => 1],
                ['name' => '২', 'name_en' => '2', 'name_ru' => '2', 'sort_order' => 2],
                ['name' => '৩', 'name_en' => '3', 'name_ru' => '3', 'sort_order' => 3],
                ['name' => '৪', 'name_en' => '4', 'name_ru' => '4', 'sort_order' => 4],
                ['name' => '৫', 'name_en' => '5', 'name_ru' => '5', 'sort_order' => 5],
            ]],
            ['name' => 'বাথরুম', 'name_en' => 'Bathroom', 'name_ru' => 'Bathroom', 'sort_order' => 3, 'values' => [
                ['name' => 'না', 'name_en' => 'No', 'name_ru' => 'No', 'sort_order' => 1],
                ['name' => '১', 'name_en' => '1', 'name_ru' => '1', 'sort_order' => 2],
                ['name' => '২', 'name_en' => '2', 'name_ru' => '2', 'sort_order' => 3],
                ['name' => '৩', 'name_en' => '3', 'name_ru' => '3', 'sort_order' => 4],
            ]],
        ];

        foreach ($options as $option) {
            $opt = new Option();
            $opt->name = $option['name'];       // Bangla name
            $opt->name_en = $option['name_en']; // English name
            $opt->name_ru = $option['name_ru']; // Russian (kept same as English)
            $opt->sort_order = $option['sort_order'];
            $opt->save();

            foreach ($option['values'] as $value) {
                $val = new Value();
                $val->option_id = $opt->id;
                $val->name = $value['name'];       // Bangla value
                $val->name_en = $value['name_en']; // English value
                $val->name_ru = $value['name_ru']; // Russian (kept same as English)
                $val->sort_order = $value['sort_order'];
                $val->save();
            }
        }
    }
}
