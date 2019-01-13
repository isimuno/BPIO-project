<?php

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
        $this->call (Pension_typesTableSeeder::class);
        $this->call (CountiesTableSeeder::class);
        $this->call (MunicipaliesTableSeeder::class);
        $this->call (PlacesTableSeeder::class);
        $this->call (PensionersTableSeeder::class);
        $this->call (CountinentsTableSeeder::class);

    }
}
