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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();
            $table->string('usuario')->unique();
            $table->string('clave');
            $table->date('fecha')->nullable();

            $table->unsignedBigInteger('id_persona');
            $table->foreign('id_persona')->references('id')->on('personas');

            $table->unsignedBigInteger('id_rol');
            $table->foreign('id_rol')->references('id')->on('roles');

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
        Schema::dropIfExists('usuarios');
    }
};
