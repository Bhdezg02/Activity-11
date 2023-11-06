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
        Schema::create('courses', function (Blueprint $table) {
            $table->id(); // Integer Unsigned Increment (Primary Key)
            $table->string('title'); // Course Title varchar(255)
            $table->text('description')->nullable(); // Course Description, possibly longer than 255 characters
            $table->string('language')->default('English'); // Programming Language e.g., 'Python', 'JavaScript'
            $table->enum('difficulty', ['Beginner', 'Intermediate', 'Advanced']); // Course Difficulty Level
            $table->string('instructor'); // Instructor's Name varchar(255)
            $table->string('email')->unique(); // Instructor's Email, unique
            $table->timestamp('email_verified_at')->nullable(); // Timestamp for when the instructor's email was verified
            $table->timestamps(); // created_at and updated_at
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('courses');
    }
};