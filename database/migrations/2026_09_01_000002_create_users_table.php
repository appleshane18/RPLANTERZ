<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id('user_id');
            $table->foreignId('branch_id')->nullable()->constrained('branches', 'branch_id');
            $table->string('name');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('role'); // owner | cashier | checker
            $table->string('status')->default('active');
            $table->boolean('must_change_password')->default(true);
            $table->rememberToken();
            $table->timestamp('date_created')->useCurrent();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
