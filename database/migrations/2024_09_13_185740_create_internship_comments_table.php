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
        Schema::create('internship_comments', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('internship_id')->constrained('internships');
            $table->foreignId('created_by')->constrained('users'); // FK to the user who made the comment
            $table->text('comment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internship_comments');
    }
};
