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
            $table->increments('id_book'); // Kolom id_book dengan tipe INT dan auto-increment
            $table->string('code', 100); // Kolom code dengan tipe VARCHAR(100)
            $table->string('title', 500); // Kolom title dengan tipe VARCHAR(500)
            $table->string('author', 200); // Kolom author dengan tipe VARCHAR(200)
            $table->unsignedInteger('category_id'); // Kolom foreign key ke tabel category
            $table->foreign('category_id')->references('id_category')->on('categories')->onDelete('cascade'); // Definisi foreign key
            $table->timestamps(); // Kolom created_at dan updated_at
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
