<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accounts_receivable', function (Blueprint $table) {
            $table->id('receivable_id');
            $table->foreignId('transaction_id')->nullable()->constrained('sales_transactions', 'transaction_id');
            $table->string('customer_name');
            $table->string('customer_contact')->nullable();
            $table->decimal('total_amount_due', 12, 2);
            $table->decimal('balance_remaining', 12, 2);
            $table->date('due_date')->nullable();
            $table->string('status')->default('open'); // open | partial | paid
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts_receivable');
    }
};
