<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('inventory_adjustments', function (Blueprint $table) {
            $table->id('adjustment_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->foreignId('batch_id')->nullable()->constrained('products_batches', 'batch_id');
            $table->foreignId('adjusted_by')->constrained('users', 'user_id');
            $table->integer('quantity');
            $table->decimal('loss_value', 12, 2)->default(0);
            $table->string('reason'); // expired | spilled | damaged
            $table->date('adjustment_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('inventory_adjustments');
    }
};
