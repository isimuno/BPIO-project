<?php

use Illuminate\Database\Seeder;

class Pension_typesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\PensionType::create([
            'id' => '1',
            'name' => 'starosna mirovina'
        ]);
        App\PensionType::create([
            'id' => '2',
            'name' => 'prijevremena starosna mirovina'
        ]);
    }
}
