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
            $table->string('car');
            $table->foreignId('service_id')->constrained('services')->cascadeOnDelete();
            $table->string('price');
            $table->string('time');
            $table->string('location');
            $table->string('phone');
            $table->string('emergency')->default('0');
            $table->string('status')->default('under review');
            $table->foreignId('vendor_id')->constrained('users')->cascadeOnDelete();
            $table->string('option1');
            $table->string('option2');
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
