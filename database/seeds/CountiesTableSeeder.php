<?php

use Illuminate\Database\Seeder;

class CountiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\County::create([
            'id' => '1',
            'name' => 'Zagrebacka'
        ]);
        App\County::create([
            'id' => '2',
            'name' => 'Grad Zagreb'
        ]);
    }
}
