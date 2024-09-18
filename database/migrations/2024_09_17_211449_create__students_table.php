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
        Schema::create('_students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('matric_number');
            $table->string('programme');
            $table->string('faculty');
            $table->string('deparrtment');
            $table->string('Session/semester');
            $table->string('course1');
            $table->string('course2');
            $table->string('course3');
            $table->string('course4');
            $table->string('course5');
            $table->string('course6');

            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_students');
    }
};
