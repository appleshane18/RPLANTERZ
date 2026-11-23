<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('accounts', function (Blueprint $table) {
            $table->id('account_id');
            $table->string('account_code')->unique();
            $table->string('account_name');
            $table->string('account_type'); // asset | liability | equity | revenue | expense
            $table->string('normal_balance'); // debit | credit
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('accounts');
    }
};
