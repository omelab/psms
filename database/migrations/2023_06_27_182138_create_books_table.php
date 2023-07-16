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
        Schema::create('books', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->string('book_code');
            $table->string('name');
            $table->string('writter_name');
            $table->string('serial_number'); 
            $table->string('publisher'); 
            $table->date('publish_date'); 
            $table->string('version'); 
            $table->decimal('price', 5, 2)->nullable();
            $table->date('available_date'); 
            $table->decimal('quantity', 5, 2)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('books');
    }
};
