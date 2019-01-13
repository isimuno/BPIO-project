<?php

use Illuminate\Database\Seeder;

class MunicipaliesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {   
        App\Municipality::create([
            'name' => 'Velika Gorica',
            'county_id' => '1'
        ]);
        App\Municipality::create([
            'name' => 'Zagreb',
            'county_id' => '2'
        ]);

    }
}
