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
        Schema::create('documents', function (Blueprint $table) {
            $table->id();
            $table->foreignId('student_id')->constrained('students')->onDelete('cascade');

            $table->boolean('marksheet_10th')->default(false);
            $table->string("register_number_10th");

            $table->boolean('marksheet_12th')->default(false);
            $table->string("register_number_12th");

            $table->boolean('marksheet_degree')->default(false);
            $table->string("register_number_degree");

            $table->boolean('migration')->default(false);
            $table->string("migration_number");
            
            $table->boolean('caste_certificate')->default(false);
            $table->string("caste_certificate_number");


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('documents');
    }
};
