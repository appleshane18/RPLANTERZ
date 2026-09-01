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
        Schema::create('stock_transfers', function (Blueprint $table) {
            $table->id('transfer_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('source_branch_id')->constrained('branches', 'branch_id');
            $table->foreignId('destination_branch_id')->constrained('branches', 'branch_id');
            $table->foreignId('requested_by')->constrained('users', 'user_id');
            $table->integer('quantity');
            $table->timestamp('transfer_date')->useCurrent();
            $table->string('status')->default('pending'); // pending, in-transit, completed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('stock_transfers');
    }
};
