<?php

use Illuminate\Database\Seeder;

class CountinentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Continent::create([
            'continent_name' => 'Europa',
            'number_of_countries' => '0',
            'native_name' => ' '
        ]);
        App\Continent::create([
            'continent_name' => 'Amerika',
            'number_of_countries' => '0',
            'native_name' => ' '
        ]);

    }
}
