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
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('cAluNombre', 50)->nullable()->index();
            $table->string('cAluCurso', 50)->nullable()->index();
            $table->decimal('nAluNota1', 6, 2)->default(0);
            $table->decimal('nAluNota2', 6, 2)->default(0);
            $table->decimal('nAluPromedio', 6, 2);
            $table->string('cAluCondicion', 50);
            $table->date('dAluFecRegistro');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumnos');
    }
};
