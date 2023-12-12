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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('category')->unique();

            $table->string('product_name'); // Add this line
            $table->string('product_description')->nullable(); // Add this line
            $table->string('product_price')->default(0); // Add this line
            $table->string('product_price_promo')->default(0); // Add this line

            $table->integer('product_stock')->default(0); // Add this line

            $table->integer('weight')->default(env('WEIGHT_DEFAULT')); // Add this line
            $table->integer('Height')->default(0); // Add this line
            $table->integer('Width')->default(0); // Add this line
            $table->integer('Depth')->default(0); // Add this line

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
