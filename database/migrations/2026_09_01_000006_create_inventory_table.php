<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory', function (Blueprint $table) {
            $table->id('inventory_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->integer('quantity')->default(0);
            $table->integer('reorder_level')->default(0);
            $table->timestamp('last_updated')->useCurrent();
            $table->unique(['product_id', 'branch_id']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory');
    }
};
