<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('journal_entries', function (Blueprint $table) {
            $table->id('entry_id');
            $table->foreignId('transaction_id')->nullable()->constrained('sales_transactions', 'transaction_id');
            $table->foreignId('expense_id')->nullable()->constrained('expenses', 'expense_id');
            $table->foreignId('adjustment_id')->nullable()->constrained('inventory_adjustments', 'adjustment_id');
            $table->foreignId('asset_id')->nullable()->constrained('fixed_assets', 'asset_id');
            $table->foreignId('loan_id')->nullable()->constrained('loans', 'loan_id');
            $table->foreignId('loan_payment_id')->nullable()->constrained('loan_payments', 'loan_payment_id');
            $table->foreignId('payment_id')->nullable()->constrained('receivable_payments', 'payment_id');
            $table->foreignId('refund_id')->nullable()->constrained('refunds', 'refund_id');
            $table->string('entry_number')->unique();
            $table->date('entry_date');
            $table->string('description')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('journal_entries');
    }
};
