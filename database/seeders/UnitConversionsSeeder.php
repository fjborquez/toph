<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UnitConversionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        if (DB::table('unit_conversions')->count() == 0) {
            DB::table('unit_conversions')->insert([
                ['id' => 1, 'from_unit_id' => 1, 'to_unit_id' => 2, 'factor' => 0.001], // Milligrams to Grams
                ['id' => 2, 'from_unit_id' => 2, 'to_unit_id' => 1, 'factor' => 1000], // Grams to Milligrams
                ['id' => 3, 'from_unit_id' => 1, 'to_unit_id' => 3, 'factor' => 0.000001], // Milligrams to Kilograms
                ['id' => 4, 'from_unit_id' => 3, 'to_unit_id' => 1, 'factor' => 1000000], // Kilograms to Milligrams
                ['id' => 5, 'from_unit_id' => 1, 'to_unit_id' => 4, 'factor' => 0.00003527396], // Milligrams to Ounces
                ['id' => 6, 'from_unit_id' => 4, 'to_unit_id' => 1, 'factor' => 28349.5], // Ounces to Milligrams
                ['id' => 7, 'from_unit_id' => 2, 'to_unit_id' => 3, 'factor' => 0.001], // Grams to Kilograms
                ['id' => 8, 'from_unit_id' => 3, 'to_unit_id' => 2, 'factor' => 1000], // Kilograms to Grams
                ['id' => 9, 'from_unit_id' => 2, 'to_unit_id' => 4, 'factor' => 0.03527396], // Grams to Ounces
                ['id' => 10, 'from_unit_id' => 4, 'to_unit_id' => 2, 'factor' => 28.3495], // Ounces to Grams
                ['id' => 11, 'from_unit_id' => 3, 'to_unit_id' => 4, 'factor' => 35.27396], // Kilograms to Ounces
                ['id' => 12, 'from_unit_id' => 4, 'to_unit_id' => 3, 'factor' => 0.0283495], // Ounces to Kilograms
                ['id' => 13, 'from_unit_id' => 6, 'to_unit_id' => 5, 'factor' => 0.001], // Milliliters to Liters
                ['id' => 14, 'from_unit_id' => 5, 'to_unit_id' => 6, 'factor' => 1000], // Liters to Milliliters
                ['id' => 15, 'from_unit_id' => 6, 'to_unit_id' => 7, 'factor' => 0.00422675], // Milliliters to Cups
                ['id' => 16, 'from_unit_id' => 7, 'to_unit_id' => 6, 'factor' => 236.588], // Cups to Milliliters
                ['id' => 17, 'from_unit_id' => 6, 'to_unit_id' => 8, 'factor' => 0.067628], // Milliliters to Tablespoons
                ['id' => 18, 'from_unit_id' => 8, 'to_unit_id' => 6, 'factor' => 14.7868], // Tablespoons to Milliliters
                ['id' => 19, 'from_unit_id' => 6, 'to_unit_id' => 9, 'factor' => 0.202884], // Milliliters to Teaspoons
                ['id' => 20, 'from_unit_id' => 9, 'to_unit_id' => 6, 'factor' => 4.92892], // Teaspoons to Milliliters
                ['id' => 21, 'from_unit_id' => 7, 'to_unit_id' => 5, 'factor' => 0.236588], // Cups to Liters
                ['id' => 22, 'from_unit_id' => 5, 'to_unit_id' => 7, 'factor' => 4.22675], // Liters to Cups
                ['id' => 23, 'from_unit_id' => 8, 'to_unit_id' => 5, 'factor' => 0.0147868], // Tablespoons to Liters
                ['id' => 24, 'from_unit_id' => 5, 'to_unit_id' => 8, 'factor' => 67.628], // Liters to Tablespoons
                ['id' => 25, 'from_unit_id' => 9, 'to_unit_id' => 5, 'factor' => 0.00492892], // Teaspoons to Liters
                ['id' => 26, 'from_unit_id' => 5, 'to_unit_id' => 9, 'factor' => 202.884], // Liters to Teaspoons
                ['id' => 27, 'from_unit_id' => 7, 'to_unit_id' => 8, 'factor' => 16], // Cups to Tablespoons
                ['id' => 28, 'from_unit_id' => 8, 'to_unit_id' => 7, 'factor' => 0.0625], // Tablespoons to Cups
                ['id' => 29, 'from_unit_id' => 7, 'to_unit_id' => 9, 'factor' => 48], // Cups to Teaspoons
                ['id' => 30, 'from_unit_id' => 9, 'to_unit_id' => 7, 'factor' => 0.0208333], // Teaspoons to Cups
                ['id' => 31, 'from_unit_id' => 8, 'to_unit_id' => 9, 'factor' => 3], // Tablespoons to Teaspoons
                ['id' => 32, 'from_unit_id' => 9, 'to_unit_id' => 8, 'factor' => 0.333333], // Teaspoons to Tablespoons
                ['id' => 33, 'from_unit_id' => 12, 'to_unit_id' => 11, 'factor' => 0.0166667], // Seconds to Minutes
                ['id' => 34, 'from_unit_id' => 11, 'to_unit_id' => 12, 'factor' => 60], // Minutes to Seconds
                ['id' => 35, 'from_unit_id' => 11, 'to_unit_id' => 10, 'factor' => 0.0166667], // Minutes to Hours
                ['id' => 36, 'from_unit_id' => 10, 'to_unit_id' => 11, 'factor' => 60], // Hours to Minutes
                ['id' => 37, 'from_unit_id' => 12, 'to_unit_id' => 10, 'factor' => 0.000277778], // Seconds to Hours
                ['id' => 38, 'from_unit_id' => 10, 'to_unit_id' => 12, 'factor' => 3600], // Hours to Seconds
            ]);
        }
    }
}
