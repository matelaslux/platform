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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();

            $table->string('customer_name');
            $table->string('address');
            $table->string('wilaya')->default(env('DEFAULT_WILAYA'));
            $table->string('commune')->default(env('DEFAULT_COMMUNE'));
            $table->string('postal_code')->default(env('DEFAULT_POSTAL_CODE'));
            $table->string('country')->default(env('DEFAULT_COUNTRY'));
            $table->string('email')->nullable();
            $table->string('telephone')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
