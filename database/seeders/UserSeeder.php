<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Owner Account
        User::create([
            'branch_id' => 1,
            'name' => 'Herbert',
            'email' => 'herbert@rplanterz.com',
            'password' => Hash::make('password123'),
            'role' => 'Owner',
            'status' => 'active',
            'must_change_password' => false,
            'date_created' => now(),
        ]);

        // 2. Cashier Account
        User::create([
            'branch_id' => 1,
            'name' => 'Cari',
            'email' => 'cari@rplanterz.com',
            'password' => Hash::make('password123'),
            'role' => 'Cashier',
            'status' => 'active',
            'must_change_password' => false,
            'date_created' => now(),
        ]);

        // 3. Checker Account (Apple)
        User::create([
            'branch_id' => 1,
            'name' => 'Apple',
            'email' => 'apple@rplanterz.com',
            'password' => Hash::make('password123'),
            'role' => 'Checker',
            'status' => 'active',
            'must_change_password' => false,
            'date_created' => now(),
        ]);

        // 4. Isa pang Cashier (Amanda)
        User::create([
            'branch_id' => 1,
            'name' => 'Amanda',
            'email' => 'amanda@rplanterz.com',
            'password' => Hash::make('password123'),
            'role' => 'Cashier',
            'status' => 'active',
            'must_change_password' => false,
            'date_created' => now(),
        ]);
    }
}
