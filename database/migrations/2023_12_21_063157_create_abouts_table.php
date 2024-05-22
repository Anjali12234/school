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
        Schema::create('abouts', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->longText('about_description')->nullable();
            $table->string('about_image')->nullable();
            $table->string('director_image')->nullable();
            $table->string('director_name');
            $table->string('director_email');
            $table->string('director_phone_number');
            $table->longText('message')->nullable();
            $table->string('post');
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('abouts');
    }
};
