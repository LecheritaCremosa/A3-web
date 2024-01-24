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
        Schema::create('instructor', function (Blueprint $table) {
            $table->unsignedBigInteger('document')->primary()->comment('cédula')->unique();
            $table->string('fullname')->comment('Nombre Completo');
            $table->string('sena_email')->comment('Email Del Sena');
            $table->string('personal_email')->comment('Email Personal');
            $table->string('phone', 30)->nullable()->comment('Teléfono');
            $table->string('password')->unique()->comment('Contraseña');
            $table->string('type')->comment('Planta o Contratista');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructor');
    }
};
