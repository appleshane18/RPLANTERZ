<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('refunds', function (Blueprint $table) {
            $table->id('refund_id');
            $table->foreignId('transaction_id')->constrained('sales_transactions', 'transaction_id');
            $table->foreignId('processed_by')->constrained('users', 'user_id');
            $table->foreignId('approved_by')->nullable()->constrained('users', 'user_id');
            $table->decimal('total_refund_amount', 12, 2);
            $table->string('reason')->nullable();
            $table->string('return_condition'); // resalable | damaged
            $table->boolean('is_approved')->default(false);
            $table->timestamp('refund_date')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refunds');
    }
};
