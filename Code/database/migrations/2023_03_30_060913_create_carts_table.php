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
        // membuat tabel database carts
        Schema::create('carts', function (Blueprint $table) {
            // atribut dari table carts
            $table->id();
            $table->integer('amount');
            // membuat foreign key users di table carts jadi bisa mengakses atribut dari table users
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            // membuat foreign key products di table carts jadi bisa mengakses atribut dari table products
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('carts');
    }
};
