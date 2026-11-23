<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('refund_details', function (Blueprint $table) {
            $table->id('refund_detail_id');
            $table->foreignId('refund_id')->constrained('refunds', 'refund_id');
            $table->foreignId('product_id')->constrained('products', 'product_id');
            $table->integer('quantity');
            $table->decimal('amount', 12, 2);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('refund_details');
    }
};
