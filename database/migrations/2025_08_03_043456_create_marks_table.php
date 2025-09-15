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
        Schema::create('marks', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('student_id');
            $table->foreign('student_id')
                ->references('id')
                ->on('students');
            $table->string('reg_number')->uniqiue();
            $table->string('course_code');
            $table->integer('credits');
            $table->integer('cie');
            $table->integer('see');
            $table->integer('total_marks');
            $table->string('grade');
            $table->integer('credits_earned');
            $table->integer('grade_points');
            $table->integer('credits_points');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('marks');
    }
};
