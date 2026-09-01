<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BranchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('branches')->insert([
            [
                'branch_name' => 'RBS Planterz - Kabacan',
                'location' => 'Kabacan, Cotabato',
                'contact_number' => '09171234567',
                'status' => 'active',
                'date_registered' => now(),
                'vat_enabled' => false,
                'vat_rate' => 12.00,
            ],
            [
                'branch_name' => "RBS Planterz - M'lang",
                'location' => "M'lang, Cotabato",
                'contact_number' => '09171234568',
                'status' => 'active',
                'date_registered' => now(),
                'vat_enabled' => false,
                'vat_rate' => 12.00,
            ],
        ]);
    }
}
