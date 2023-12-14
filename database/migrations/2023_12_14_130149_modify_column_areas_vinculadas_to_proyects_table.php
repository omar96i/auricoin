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
        Schema::table('proyects', function (Blueprint $table) {
            $table->text('areas_vinculadas')->change();
            $table->text('descripcion_estado')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('proyects', function (Blueprint $table) {
            $table->string('areas_vinculadas')->change();
            $table->dropColumn('descripcion_estado');
        });
    }
};
