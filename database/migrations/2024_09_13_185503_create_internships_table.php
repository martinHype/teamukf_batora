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
        Schema::create('internships', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('student_id')->constrained('users');
            $table->foreignId('company_id')->constrained('companies');
            $table->string('internship_name');
            $table->string('internship_description');
            $table->date('start_date');
            $table->date('end_date');
            $table->text('student_feedback')->nullable();
            $table->text('company_feedback')->nullable();
            $table->foreignId('internship_type_id')->constrained('contract_types');
            $table->foreignId('internship_status_id')->constrained('contract_statuses');
            $table->string('grade')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('internships');
    }
};
