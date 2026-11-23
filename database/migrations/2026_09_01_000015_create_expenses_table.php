<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('expenses', function (Blueprint $table) {
            $table->id('expense_id');
            $table->foreignId('branch_id')->constrained('branches', 'branch_id');
            $table->foreignId('encoded_by')->constrained('users', 'user_id');
            $table->string('category');
            $table->decimal('amount', 12, 2);
            $table->date('expense_date');
            $table->string('description')->nullable();
            $table->boolean('is_voided')->default(false);   // Owner can void (FR: Expense Recording)
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('expenses');
    }
};
