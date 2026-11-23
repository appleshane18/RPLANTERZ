<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('barcode')->unique();
            $table->string('name');
            $table->string('category');
            $table->decimal('cost_price', 12, 2);      // dealer's price
            $table->decimal('selling_price', 12, 2);
            $table->decimal('markup_percentage', 6, 2)->nullable();
            $table->string('unit_of_measure');
            $table->string('description')->nullable();
            $table->string('image_url')->nullable();
            $table->timestamp('date_added')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
