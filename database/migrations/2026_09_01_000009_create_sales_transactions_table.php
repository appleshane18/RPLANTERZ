<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales_transactions', function (Blueprint $table) {
            $table->id('transaction_id');
            $table->foreignId('cashier_id')->constrained('users', 'user_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->string('receipt_number')->unique();
            $table->decimal('subtotal_amount', 12, 2);
            $table->decimal('discount_amount', 12, 2)->default(0);
            $table->decimal('total_amount', 12, 2);
            $table->decimal('cash_tendered', 12, 2)->default(0);
            $table->decimal('change_amount', 12, 2)->default(0);
            $table->string('payment_method')->default('cash'); // cash | credit
            $table->string('sync_status')->default('synced');   // synced | pending_sync | flagged
            $table->timestamp('transaction_date')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_transactions');
    }
};
