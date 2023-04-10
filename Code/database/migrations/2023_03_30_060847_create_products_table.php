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
        // Membuat tabel datavase products
        Schema::create('products', function (Blueprint $table) {
            // Atribute dari table products
            $table->id();   
            $table->string('name');   
            $table->integer('price');   
            $table->string('description');   
            $table->string('image');   
            $table->integer('stok');   
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
