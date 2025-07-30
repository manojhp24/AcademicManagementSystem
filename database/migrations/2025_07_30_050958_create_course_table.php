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
            $table -> string("course_name");
            $table -> string("course_code")->unique();
            $table -> integer("semester");
            $table -> string("structure_code");
            $table -> string("elective_group")->nullable();
            $table -> integer("lecture_credits");
            $table -> integer("practical_credits");
            $table -> integer("total_credits");
            $table -> integer("internal_marks");
            $table -> integer("external_marks");
            $table -> integer("total_marks"); 
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
