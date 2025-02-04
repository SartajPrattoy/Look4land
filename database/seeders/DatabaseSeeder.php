<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            LocationSeeder::class,
            OptionValueSeeder::class,
        ]);
        \App\Models\Estate::factory()->count(5)->create();

        \App\Models\UserAgent::factory()->count(2)->create();
        \App\Models\Visitor::factory()->count(2)->create();
    }
}
