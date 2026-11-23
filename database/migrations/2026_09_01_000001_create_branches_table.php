<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('branches', function (Blueprint $table) {
            $table->id('branch_id');
            $table->string('branch_name');
            $table->string('location');
            $table->string('contact_number')->nullable();
            $table->string('status')->default('active');
            $table->timestamp('date_registered')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('branches');
    }
};
