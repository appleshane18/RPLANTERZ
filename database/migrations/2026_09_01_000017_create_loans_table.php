<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('loans', function (Blueprint $table) {
            $table->id('loan_id');
            $table->string('lender_name');
            $table->decimal('principal_amount', 14, 2);
            $table->decimal('interest_rate', 6, 2)->default(0);
            $table->integer('term_months');
            $table->decimal('monthly_amortization', 14, 2)->default(0);
            $table->decimal('balance_remaining', 14, 2);
            $table->date('acquisition_date');
            $table->string('status')->default('active'); // active | fulfilled
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
