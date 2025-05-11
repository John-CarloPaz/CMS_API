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
        Schema::create('personal_details', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name');
            $table->date('birth_date');
            $table->integer('age');
            $table->string('civil_status');
            $table->string('birth_place');
            $table->string('nationality');
            $table->string('contact_number');
            $table->string('home_address');
            $table->string('email_address');
            $table->string('emergency_contact_name');
            $table->string('emergency_contact_relationship');
            $table->string('emergency_contact_number');
            $table->string('emergency_contact_address');
            $table->string('father_name');
            $table->string('father_occupation');
            $table->string('father_contact_number');
            $table->string('mother_name');
            $table->string('mother_occupation');
            $table->string('mother_contact_number');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personal_details');
    }
};
