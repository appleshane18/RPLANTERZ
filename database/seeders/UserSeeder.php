<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $team = ['Amanda', 'Cari', 'Shari', 'Shariff Jimmy'];

        foreach ($team as $index => $member) {
            User::create([
                'branch_id' => 1, // Kabacan branch
                'name' => $member,
                'email' => strtolower(str_replace(' ', '', $member)) . '@rplanterz.com',
                'password' => Hash::make('admin12345'),
                'role' => $index === 0 ? 'Owner' : 'Cashier',
                'status' => 'active',
                'date_created' => now(),
            ]);
        }
    }
}
