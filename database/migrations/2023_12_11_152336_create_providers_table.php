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
        Schema::create('providers', function (Blueprint $table) {
            $table->id();
            $table->string('provider_name');
            $table->string('url');

            $table->string('api_key');
            $table->string('secret_key')->unique();

            $table->string('url_create')->nullable();
            $table->string('url_read')->nullable();
            $table->string('url_update')->nullable();
            $table->string('url_delete')->nullable();
            $table->string('url_confirm')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('providers');
    }
};
