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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('location')->nullable(); 
            $table->string('type')->nullable(); 
            $table->string('category')->nullable(); 
            $table->string('profile_image')->nullable(); 
            $table->string('image1')->nullable(); 
            $table->string('image2')->nullable(); 
            $table->string('image3')->nullable(); 
            $table->string('image4')->nullable(); 
            $table->string('phone')->nullable(); 
            $table->string('option1')->nullable(); 
            $table->string('option2')->nullable(); 

            $table->rememberToken();
            $table->foreignId('current_team_id')->nullable();
            $table->string('profile_photo_path', 2048)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
