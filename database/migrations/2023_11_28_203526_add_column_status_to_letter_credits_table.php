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
        Schema::table('letter_credits', function (Blueprint $table) {
            $table->enum('status', ['pendiente', 'revisado', 'confirmado', 'aprobado'])->default('pendiente');
            $table->text('type')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('letter_credits', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('type');
        });
    }
};
