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
        Schema::create('course_chapter_lessions', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('slug');
            $table->text('description')->null();
            $table->foreignId('instructor_id')->constrained('users');
            $table->foreignId('course_id')->constrained('courses');
            $table->foreignId('chapter_id')->constrained('course_chapters')->onDelete('cascade');
            $table->text('file_path');
            $table->enum('storage', ['upload', 'youtube', 'vimeo', 'external_link']);
            $table->string('volume')->nullable();
            $table->string('duration');
            $table->enum('file_type', ['video', 'audio', 'doc', 'file', 'pdf']);
            $table->boolean('downloadable')->default(0);
            $table->integer('order');
            $table->boolean('is_preview')->default(0);
            $table->boolean('status')->default(1);
            $table->enum('lesson_type', ['lesson', 'live']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('course_chapter_lessions');
    }
};
