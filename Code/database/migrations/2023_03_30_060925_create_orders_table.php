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
        // membuat table database orders
        Schema::create('orders', function (Blueprint $table) {
            // atribut dari table orders
            $table->id();
            // membuat atribut is_paid defaultnya false atau belum bayar
            $table->boolean('is_paid')->default(false);
            // membuat atribut payment_receipt bersifat nullable jadi jika kosong maka pasti false is_paidnya
            $table->string('payment_receipt')->nullable();
            // membuat foreign key users di table orders jadi bisa mengakses atribut dari table users
            $table->foreignId('user_id')->constrained('users')->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('orders');
    }
};
