<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{

    public function up(): void
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->id();
            $table->string('full_name');
            $table->string('gender');
            $table->string('dob')->nullable();
            $table->string('phone')->nullable();
            $table->string('email')->nullable();
            $table->string('address')->nullable();
            $table->string('join_date')->nullable();
            $table->string('leaving_date')->nullable();
            $table->string('post');
            $table->string('position')->nullable;
            $table->longText('description')->nullable();
            $table->string('image')->nullable();
            $table->string('slug')->unique();
            $table->string('status')->nullable()->default(1);
            $table->softDeletes();
            $table->timestamps();
        });
    }


    public function down(): void
    {
        Schema::dropIfExists('staff');
    }
};
