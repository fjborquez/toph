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
                ['id' => 1, 'from_unit_id' => 1, 'to_unit_id' => 2, 'factor' => 0.001],
                ['id' => 2, 'from_unit_id' => 2, 'to_unit_id' => 3, 'factor' => 0.001],
                ['id' => 3, 'from_unit_id' => 3, 'to_unit_id' => 2, 'factor' => 1000],
                ['id' => 4, 'from_unit_id' => 1, 'to_unit_id' => 3, 'factor' => 0.000001],
                ['id' => 5, 'from_unit_id' => 4, 'to_unit_id' => 2, 'factor' => 28.3495],
                ['id' => 6, 'from_unit_id' => 6, 'to_unit_id' => 5, 'factor' => 0.001],
                ['id' => 7, 'from_unit_id' => 5, 'to_unit_id' => 6, 'factor' => 1000],
                ['id' => 8, 'from_unit_id' => 7, 'to_unit_id' => 5, 'factor' => 0.236588],
                ['id' => 9, 'from_unit_id' => 8, 'to_unit_id' => 6, 'factor' => 14.7868],
                ['id' => 10, 'from_unit_id' => 9, 'to_unit_id' => 6, 'factor' => 4.92892],
                ['id' => 11, 'from_unit_id' => 11, 'to_unit_id' => 10, 'factor' => 0.0166667],
                ['id' => 12, 'from_unit_id' => 12, 'to_unit_id' => 11, 'factor' => 0.0166667],
                ['id' => 13, 'from_unit_id' => 10, 'to_unit_id' => 11, 'factor' => 60],
                ['id' => 14, 'from_unit_id' => 11, 'to_unit_id' => 12, 'factor' => 60],
            ]);
        }
    }
}
