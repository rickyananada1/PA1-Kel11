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
        // membaut table database transactions
        Schema::create('transactions', function (Blueprint $table) {
            // membuat atribut table transactions
            $table->id();
            $table->integer('amount');
            // membuat foreign key products di table transactions jadi bisa mengakses atribut dari table users
            $table->foreignId('product_id')->constrained('products')->cascadeOnDelete()->cascadeOnUpdate();
            // membuat foreign key orders di table transactions jadi bisa mengakses atribut dari table users
            $table->foreignId('order_id')->constrained('orders')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transactions');
    }
};
