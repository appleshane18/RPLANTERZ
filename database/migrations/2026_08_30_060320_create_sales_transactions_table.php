<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sales_transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->foreignId('cashier_id')->constrained('users', 'user_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->timestamp('transaction_date')->useCurrent();
            $table->decimal('total_amount', 10, 2);
            $table->string('receipt_number')->unique();

            // VAT fields
            $table->boolean('is_vat_applied')->default(false);
            $table->decimal('vat_amount', 10, 2)->default(0);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sales_transactions');
    }
};
