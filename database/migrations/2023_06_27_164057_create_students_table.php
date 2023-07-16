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
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('roll')->unique();
            $table->string('name');
            $table->string('village')->nullable();
            $table->string('thana')->nullable();
            $table->string('district')->nullable(); 
            $table->string('mobile')->nullable();  
            $table->string('program')->nullable();  
            $table->string('date_of_birth')->nullable();  
            $table->string('religion')->nullable();  
            $table->string('gender')->nullable();  
            $table->string('shift')->nullable();  
            $table->string('blood_group')->nullable();  
            $table->string('previous_school')->nullable();  
            $table->string('year')->nullable();   
            $table->string('fathers_name')->nullable();   
            $table->string('fathers_nid')->nullable();   
            $table->string('mothers_name')->nullable();   
            $table->string('mothers_nid')->nullable();   
            $table->string('autistic')->nullable();   
            $table->decimal('stipend_amount',8, 2)->nullable();   
            $table->string('book')->nullable();
            $table->date('admint_date')->nullable();
            $table->string('profile_pic')->nullable();  
            $table->string('notes')->nullable();  
            $table->enum('status', ['Regull', 'Irregular', 'Dropped', 'Transfered', 'Leave'])->default('Regull'); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
