<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('sales_items', function (Blueprint $table) {
            $table->id('item_id');
            $table->foreignId('transaction_id')->constrained('sales_transactions', 'transaction_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('batch_id')->nullable()->constrained('products_batches', 'batch_id');
            $table->integer('quantity');
            $table->decimal('unit_price', 12, 2);
            $table->decimal('unit_cost_fifo', 12, 2);
            $table->decimal('subtotal', 12, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('sales_items');
    }
};
