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
        Schema::create('course', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('course_id')->unique();
            $table->string('shift')->comment('Tipo De Jornada');
            $table->foreignId('career_id')->constrained('career')->onDelete('cascade')->onUpdate('cascade');
            $table->date('initial_date')->comment('Fecha Inicial');
            $table->date('final_date')->comment('Fecha De Finalización');
            $table->string('type')->comment('Tipo De Curso');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course');
    }
};
