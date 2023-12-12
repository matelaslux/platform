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
        Schema::create('orders', function (Blueprint $table) {
            $table->id();

            $table->foreignId('product_id')->constrained('products');
            $table->foreignId('provider_id')->constrained('providers');
            $table->foreignId('partner_id')->constrained('partners');
            $table->foreignId('customer_id')->constrained('customers');


            $table->string('reference');
            $table->string('order_number');
            $table->date('order_date');

            $table->string('name');
            $table->string('telephone');
            $table->string('address');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country')->default(env('DEFAULT_COUNTRY'));
            $table->string('email')->nullable();


            $table->integer('order_price');
            $table->integer('tracking_number');

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
