<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('receivable_payments', function (Blueprint $table) {
            $table->id('payment_id');
            $table->foreignId('receivable_id')->constrained('accounts_receivable', 'receivable_id');
            $table->foreignId('acknowledged_by')->constrained('users', 'user_id');
            $table->decimal('amount_paid', 12, 2);
            $table->date('payment_date');
            $table->string('reference_no')->nullable();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('receivable_payments');
    }
};
