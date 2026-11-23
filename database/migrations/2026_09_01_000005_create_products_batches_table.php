<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products_batches', function (Blueprint $table) {
            $table->id('batch_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->string('batch_name');
            $table->string('supplier_name')->nullable();   // SUGGESTED: supports Supplier Purchases screen (Fig. 35)
            $table->integer('quantity_received');
            $table->integer('quantity_remaining');
            $table->decimal('unit_cost', 12, 2);
            $table->date('date_received');
            $table->date('expiry_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products_batches');
    }
};
