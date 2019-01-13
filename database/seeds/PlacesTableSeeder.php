<?php

use Illuminate\Database\Seeder;

class PlacesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Place::create([
           'name' => 'Velika Gorica',
           'municipality_id' => '1'
        ]);
        App\Place::create([
            'name' => 'Novo Cice',
            'municipality_id' => '1'
            ]);
        App\Place::create([
            'name' => 'Prečko',
            'municipality_id' => '2'
            ]);
    }
}
