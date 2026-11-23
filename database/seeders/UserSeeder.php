<?php

namespace Database\Seeders;

use App\Models\Branch;
use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $kabacan = Branch::where('branch_name', 'like', '%Kabacan%')->first();
        $mlang = Branch::where('branch_name', 'like', '%M\'lang%')->first();

        // 1 Owner (walang forced password change sa seed)
        User::firstOrCreate(
            ['email' => 'owner@rplanterz.com'],
            [
                'name' => 'Business Owner',
                'password' => 'OwnerPass123!',
                'role' => 'owner',
                'branch_id' => null,
                'status' => 'active',
                'must_change_password' => false,
            ]
        );

        $branches = array_filter([
            ['branch' => $kabacan, 'prefix' => 'kab'],
            ['branch' => $mlang, 'prefix' => 'mlg'],
        ], fn ($item) => $item['branch'] !== null);

        foreach ($branches as $entry) {
            $branch = $entry['branch'];
            $prefix = $entry['prefix'];

            $staffList = [
                [
                    'name' => "{$branch->branch_name} Cashier 1",
                    'email' => "cashier1.{$prefix}@rplanterz.com",
                    'role' => 'cashier',
                ],
                [
                    'name' => "{$branch->branch_name} Cashier 2",
                    'email' => "cashier2.{$prefix}@rplanterz.com",
                    'role' => 'cashier',
                ],
                [
                    'name' => "{$branch->branch_name} Checker 1",
                    'email' => "checker1.{$prefix}@rplanterz.com",
                    'role' => 'checker',
                ],
                [
                    'name' => "{$branch->branch_name} Checker 2",
                    'email' => "checker2.{$prefix}@rplanterz.com",
                    'role' => 'checker',
                ],
            ];

            foreach ($staffList as $staff) {
                User::firstOrCreate(
                    ['email' => $staff['email']],
                    [
                        'name' => $staff['name'],
                        'password' => 'TempPass123!',
                        'role' => $staff['role'],
                        'branch_id' => $branch->branch_id,
                        'status' => 'active',
                        'must_change_password' => true,
                    ]
                );
            }
        }
    }
}
