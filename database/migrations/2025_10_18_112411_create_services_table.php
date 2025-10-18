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
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('name')->nullable();
            $table->longText('description')->nullable();
            $table->string('overview')->nullable();
            $table->string('icon')->nullable();
            $table->string('banner')->nullable();
            $table->string('image')->nullable();
            $table->string('contact_title')->nullable();
            $table->longText('contact_description')->nullable();
            $table->string('contact_number')->nullable();
            $table->string('file_download')->nullable();
            $table->string('status')->default('deactive');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('services');
    }
};
