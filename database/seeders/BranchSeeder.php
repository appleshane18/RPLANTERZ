<?php

namespace Database\Seeders;

use App\Models\Branch;
use Illuminate\Database\Seeder;

class BranchSeeder extends Seeder
{
    public function run(): void
    {
        Branch::firstOrCreate(
            ['branch_name' => 'Kabacan Branch'],
            [
                'location' => 'Kabacan, Cotabato',
                'contact_number' => '09000000001',
                'status' => 'Active',
            ]
        );

        Branch::firstOrCreate(
            ['branch_name' => 'M\'lang Branch'],
            [
                'location' => 'M\'lang, Cotabato',
                'contact_number' => '09000000002',
                'status' => 'Active',
            ]
        );
    }
}
