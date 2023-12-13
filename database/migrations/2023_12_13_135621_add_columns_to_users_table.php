<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->string('names');
            $table->string('last_name');
            $table->string('nit');
            $table->string('address');
            $table->string('country');
            $table->string('region');
            $table->string('phone');
            $table->string('bank');
            $table->string('type_bank');
            $table->string('number_acount');
            $table->string('wallet_number');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
        });
    }
};
