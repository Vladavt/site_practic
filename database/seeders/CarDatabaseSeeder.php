<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CarDatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // 1 Countries
        DB::table('countries')->insert([
            ['name' => 'Germany'],
            ['name' => 'Japan'],
            ['name' => 'USA'],
        ]);

        // 2 Colors
        DB::table('colors')->insert([
            ['name' => 'Black', 'type' => 'Metallic'],
            ['name' => 'White', 'type' => 'Pearl'],
            ['name' => 'Red', 'type' => 'Matte'],
        ]);

        // 3 Transmissions
        DB::table('transmissions')->insert([
            ['name' => 'Automatic', 'type' => 'AT'],
            ['name' => 'Manual', 'type' => 'MT'],
            ['name' => 'Robot', 'type' => 'DCT'],
        ]);

        // 4 Brands
        DB::table('brands')->insert([
            ['name' => 'BMW', 'create_year' => 1916, 'country_id' => 1],
            ['name' => 'Toyota', 'create_year' => 1937, 'country_id' => 2],
            ['name' => 'Ford', 'create_year' => 1903, 'country_id' => 3],
        ]);

        // 5 Models
        DB::table('models')->insert([
            ['name' => 'X5', 'body_type' => 'SUV', 'year_from' => 2018, 'year_to' => 2025, 'brand_id' => 1],
            ['name' => 'Camry', 'body_type' => 'Sedan', 'year_from' => 2017, 'year_to' => 2026, 'brand_id' => 2],
            ['name' => 'Mustang', 'body_type' => 'Coupe', 'year_from' => 2015, 'year_to' => 2024, 'brand_id' => 3],
        ]);

        // 6 Cars
        DB::table('cars')->insert([
            [
                'pasport' => 'A123BC', 'year' => 2020, 'price' => '50000', 'mileage' => 30000,
                'status' => 'Available', 'model_id' => 1, 'color_id' => 1, 'transmission_id' => 1,
            ],
            [
                'pasport' => 'B456DE', 'year' => 2021, 'price' => '35000', 'mileage' => 15000,
                'status' => 'Available', 'model_id' => 2, 'color_id' => 2, 'transmission_id' => 1,
            ],
            [
                'pasport' => 'C789FG', 'year' => 2019, 'price' => '45000', 'mileage' => 50000,
                'status' => 'Sold', 'model_id' => 3, 'color_id' => 3, 'transmission_id' => 2,
            ],
        ]);
    }
}