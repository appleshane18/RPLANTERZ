<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('stock_transfers', function (Blueprint $table) {
            $table->id('transfer_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('source_branch_id')->constrained('branches', 'branch_id');
            $table->foreignId('destination_branch_id')->constrained('branches', 'branch_id');
            $table->foreignId('requested_by')->constrained('users', 'user_id');
            $table->foreignId('received_by')->nullable()->constrained('users', 'user_id');
            $table->integer('quantity_sent');
            $table->integer('quantity_received')->nullable();
            $table->integer('discrepancy_quantity')->default(0);
            $table->string('discrepancy_reason')->nullable();
            $table->string('status')->default('pending'); // pending | completed
            $table->timestamp('transfer_date')->useCurrent();
            $table->timestamp('received_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('stock_transfers');
    }
};
