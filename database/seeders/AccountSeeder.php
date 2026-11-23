<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    public function run(): void
    {
        $accounts = [
            // Assets
            ['account_code' => '1010', 'account_name' => 'Cash', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1020', 'account_name' => 'Accounts Receivable', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1030', 'account_name' => 'Inventory', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1110', 'account_name' => 'Fixed Assets - Land', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1120', 'account_name' => 'Fixed Assets - Building', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1130', 'account_name' => 'Fixed Assets - Vehicle', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1140', 'account_name' => 'Fixed Assets - Equipment', 'account_type' => 'Asset', 'normal_balance' => 'Debit'],
            ['account_code' => '1190', 'account_name' => 'Accumulated Depreciation', 'account_type' => 'Asset', 'normal_balance' => 'Credit'],

            // Liabilities
            ['account_code' => '2010', 'account_name' => 'Loans Payable', 'account_type' => 'Liability', 'normal_balance' => 'Credit'],

            // Equity
            ['account_code' => '3010', 'account_name' => 'Owner\'s Capital', 'account_type' => 'Equity', 'normal_balance' => 'Credit'],
            ['account_code' => '3020', 'account_name' => 'Owner\'s Withdrawals', 'account_type' => 'Equity', 'normal_balance' => 'Debit'],

            // Revenue
            ['account_code' => '4010', 'account_name' => 'Sales', 'account_type' => 'Revenue', 'normal_balance' => 'Credit'],
            ['account_code' => '4020', 'account_name' => 'Sales Returns & Allowances', 'account_type' => 'Revenue', 'normal_balance' => 'Debit'],

            // Cost of Goods Sold & Losses
            ['account_code' => '5010', 'account_name' => 'Cost of Goods Sold', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
            ['account_code' => '5020', 'account_name' => 'Inventory Loss', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],

            // Operating & Other Expenses
            ['account_code' => '6010', 'account_name' => 'Salaries Expense', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
            ['account_code' => '6020', 'account_name' => 'Utilities Expense', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
            ['account_code' => '6030', 'account_name' => 'Rent Expense', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
            ['account_code' => '6040', 'account_name' => 'Depreciation Expense', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
            ['account_code' => '6050', 'account_name' => 'Interest Expense', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
            ['account_code' => '6090', 'account_name' => 'Other Operating Expenses', 'account_type' => 'Expense', 'normal_balance' => 'Debit'],
        ];

        foreach ($accounts as $account) {
            Account::firstOrCreate(
                ['account_code' => $account['account_code']],
                $account
            );
        }
    }
}
