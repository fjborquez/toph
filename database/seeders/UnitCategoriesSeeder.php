<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitCategoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('unit_categories')->count() == 0) {
            DB::table('unit_categories')->insert([
                ['id' => 1, 'name' => 'Mass', 'description' => 'Units of measurement related to mass (e.g., kg, g, mg, oz)'],
                ['id' => 2, 'name' => 'Volume', 'description' => 'Units of measurement related to volume (e.g., L, mL, cup, tbsp, tsp)'],
                ['id' => 3, 'name' => 'Time', 'description' => 'Units of measurement related to time (e.g., hr, min, sec)'],
                ['id' => 4, 'name' => 'Count', 'description' => 'Units used for counting individual items (e.g., unit)'],
            ]);
        }
    }
}
