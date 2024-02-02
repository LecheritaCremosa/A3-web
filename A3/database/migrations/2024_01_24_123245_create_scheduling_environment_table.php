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
        Schema::create('scheduling_environment', function (Blueprint $table) {
            $table->id();
            $table->foreignId('course_id')->constrained('course')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->foreignId('instructor_id')->constrained('instructor', 'document')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->date('date_scheduling')->comment('Fecha De Programación');
            $table->time('initial_hour')->comment('Hora De Inicio');
            $table->time('final_hour')->comment('Hora De Finalización');
            $table->foreignId('environment_id')->constrained('learning_environment')
            ->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('scheduling_environment');
    }
};
