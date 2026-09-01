<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Sample Fertilizer 1kg',
                'category' => 'Fertilizer',
                'description' => 'Organic fertilizer for crops',
                'cost_price' => 80.00,
                'selling_price' => 120.00,
                'barcode' => '1234567890123',
                'unit_of_measure' => 'kg',
                'date_added' => now(),
            ],
            [
                'name' => 'Sample Pesticide 500ml',
                'category' => 'Pesticide',
                'description' => 'General purpose pesticide',
                'cost_price' => 150.00,
                'selling_price' => 220.00,
                'barcode' => '1234567890124',
                'unit_of_measure' => 'bottle',
                'date_added' => now(),
            ],
        ]);
    }
}
