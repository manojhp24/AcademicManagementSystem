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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string("student_name");
            $table->string("roll_number")->unique();
            $table->string("place")->nullable();
            $table->string("state")->nullable();
            $table->date("dob")->nullable();
            $table->string("phone_number")->nullable();
            $table->string("alternative_phone_number")->nullable();
            $table->string("email")->nullable();
            $table->text("permanent_address")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student');
    }
};
