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
        Schema::create('registrations', function (Blueprint $table) {
            $table->id();
            $table->string('npm')->unique()->nullable();
            $table->string('name')->nullable();
            $table->string('class')->nullable();
            $table->string('major')->nullable();
            $table->string('location')->nullable();
            $table->string('birth_place')->nullable();
            $table->date('birth_date')->nullable();
            $table->enum('gender',['M','F'])->default("M");
            $table->text('address')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('position')->nullable();
            $table->integer('last_gpa')->nullable();
            $table->string('cv_path')->nullable();
            $table->string('krs_path')->nullable();
            $table->string('photo_path')->nullable();
            $table->string('student_card_path')->nullable();
            $table->string('identity_path')->nullable();
            $table->string('score_path')->nullable();
            $table->string('certificate_path')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('registrations');
    }
};
