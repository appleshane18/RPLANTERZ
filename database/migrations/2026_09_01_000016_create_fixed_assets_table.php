<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('fixed_assets', function (Blueprint $table) {
            $table->id('asset_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->string('asset_name');
            $table->string('category'); // land | building | vehicle | equipment
            $table->decimal('acquisition_cost', 14, 2);
            $table->date('acquisition_date');
            $table->integer('useful_life_years')->nullable();
            $table->decimal('salvage_value', 14, 2)->default(0);
            $table->decimal('monthly_depreciation', 14, 2)->default(0);
            $table->decimal('accumulated_depreciation', 14, 2)->default(0);
            $table->decimal('net_book_value', 14, 2)->default(0);
            $table->string('status')->default('active'); // active | terminated
            $table->date('termination_date')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('fixed_assets');
    }
};
