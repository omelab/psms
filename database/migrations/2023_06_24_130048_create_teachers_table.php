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
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('teachers_code')->unique();
            $table->string('name');
            $table->string('designation')->nullable();
            $table->string('prmanent_address')->nullable();
            $table->string('present_address')->nullable();
            $table->string('district')->nullable();
            $table->string('gender')->nullable();  
            $table->string('marital_status')->nullable();  
            $table->string('date_of_birth')->nullable();  
            $table->string('education')->nullable();  
            $table->string('department')->nullable();  
            $table->string('email')->nullable();  
            $table->string('mobile')->nullable();  
            $table->string('notes')->nullable();  
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
