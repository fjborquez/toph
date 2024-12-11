<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitOfMeasurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('unit_of_measurement')->count() == 0) {
            DB::table('unit_of_measurement')->insert([
                ['id' => 1, 'description' => 'Milligrams', 'abbreviation' => 'mg', 'category_id' => 1],
                ['id' => 2, 'description' => 'Grams', 'abbreviation' => 'g', 'category_id' => 1],
                ['id' => 3, 'description' => 'Kilograms', 'abbreviation' => 'kg', 'category_id' => 1],
                ['id' => 4, 'description' => 'Ounces', 'abbreviation' => 'oz', 'category_id' => 1],
                ['id' => 5, 'description' => 'Liters', 'abbreviation' => 'L', 'category_id' => 2],
                ['id' => 6, 'description' => 'Milliliters', 'abbreviation' => 'mL', 'category_id' => 2],
                ['id' => 7, 'description' => 'Cup', 'abbreviation' => 'cup', 'category_id' => 2],
                ['id' => 8, 'description' => 'Tablespoon', 'abbreviation' => 'tbsp', 'category_id' => 2],
                ['id' => 9, 'description' => 'Teaspoon', 'abbreviation' => 'tsp', 'category_id' => 2],
                ['id' => 10, 'description' => 'Hours', 'abbreviation' => 'hr', 'category_id' => 3],
                ['id' => 11, 'description' => 'Minutes', 'abbreviation' => 'min', 'category_id' => 3],
                ['id' => 12, 'description' => 'Seconds', 'abbreviation' => 'sec', 'category_id' => 3],
                ['id' => 13, 'description' => 'Unit', 'abbreviation' => 'u', 'category_id' => 4],
                ['id' => 14, 'description' => 'Pinch', 'abbreviation' => 'pinch', 'category_id' => 2],
                ['id' => 15, 'description' => 'Handful', 'abbreviation' => 'handful', 'category_id' => 2],
                ['id' => 16, 'description' => 'Measure', 'abbreviation' => 'meas', 'category_id' => 2],
            ]);
        }
    }
}
