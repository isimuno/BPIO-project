<?php

use Illuminate\Database\Seeder;

class PensionersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Pensioner::create([
            'name' => 'Ivo',
            'lastname' => 'Ivic',
            'sex' => 'Male', 
            'date_of_birth' => '1965-03-10', 
            'pension_type_id' => '1', 
            'year_carer' => '40', 
            'amount_pension' => '2052.65', 
            'place_id' => '1'
        ]);
        App\Pensioner::create([
            'name' => 'Maja',
            'lastname' => 'Majic',
            'sex' => 'Female', 
            'date_of_birth' => '1963-05-15', 
            'pension_type_id' => '2', 
            'year_carer' => '43', 
            'amount_pension' => '2250.70', 
            'place_id' => '1'
        ]);
    }
}
