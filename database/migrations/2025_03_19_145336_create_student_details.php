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
        Schema::create('student_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->foreignId('department_id')->constrained('departments');
            $table->foreignId('program_id')->constrained('programs');
            $table->foreignId('section_id')->constrained('sections');
            $table->integer('year_level');
            $table->string('student_type');
            $table->string('scholarship');
            $table->string('semester_enrolled');
            $table->string('status');
            $table->year('entered_year');
            $table->string('recent_secondary_year');
            $table->string('recent_school_secondary');
            $table->year('recent_primary_year');
            $table->string('recent_school_primary');
            $table->year('recent_bachelor_year');
            $table->string('recent_school_bachelor');
            $table->year('recent_master_year');
            $table->string('recent_school_master');
            $table->year('recent_doctorate_year');
            $table->string('recent_school_doctorate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('student_details');
    }
};
