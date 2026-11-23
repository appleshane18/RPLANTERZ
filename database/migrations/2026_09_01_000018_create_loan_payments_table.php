<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loan_payments', function (Blueprint $table) {
            $table->id('loan_payment_id');
            $table->foreignId('loan_id')->constrained('loans', 'loan_id');
            $table->decimal('principal_paid', 14, 2)->default(0);
            $table->decimal('interest_paid', 14, 2)->default(0);
            $table->decimal('total_paid', 14, 2);
            $table->date('payment_date');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loan_payments');
    }
};
