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
        Schema::create('paginas', function (Blueprint $table) {
            $table->id();
            $table->string('url');
            $table->string('nombre');
            $table->string('descri');
            $table->string('icono');
            $table->string('tipo');
            $table->date('fecha_creacion');
            $table->date('fecha_edicion')->nullable();
            $table->string('usuario_creacion')->nullable();
            $table->string('usuario_edicion')->nullable();
            $table->char('estado', 1)->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('paginas');
    }
};
