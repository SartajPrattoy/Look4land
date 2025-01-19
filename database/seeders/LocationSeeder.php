<?php

namespace Database\Seeders;

use App\Models\Location;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class LocationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $objects = [
            ['Dhaka', 'ঢাকা', 'Dhaka', 1],
            ['Gulshan', 'গুলশান', 'Gulshan', 2],
            ['Banani', 'বনানী', 'Banani', 3],
            ['Mirpur', 'মিরপুর', 'Mirpur', 4],
            ['Dhanmondi', 'ধানমন্ডি', 'Dhanmondi', 5],
            ['Uttara', 'উত্তরা', 'Uttara', 6],
            ['Mohammadpur', 'মোহাম্মদপুর', 'Mohammadpur', 7],
            ['Bashundhara', 'বসুন্ধরা', 'Bashundhara', 8],
            ['Old Dhaka', 'পুরান ঢাকা', 'Puran Dhaka', 9],
            ['Tejgaon', 'তেজগাঁও', 'Tejgaon', 10],
        ];

        foreach ($objects as $object) {
            $obj = new Location();
            $obj->name = $object[0];       // English name
            $obj->name_en = $object[1];   // Bangla name
            $obj->name_ru = $object[2];   // Romanized Bangla
            $obj->slug = Str::slug($object[0]);
            $obj->sort_order = $object[3];
            $obj->save();
        }
    }
}
