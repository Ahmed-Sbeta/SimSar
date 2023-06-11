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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->integer('creator_id')->references('id')->on('users');
            $table->string('title');
            $table->longText('description');
            $table->string('reference')->unique();
            $table->string('type');
            $table->float('price');
            $table->string('for');
            $table->integer('year_built');
            $table->string('address');
            $table->string('city');
            $table->integer('lot_size');
            $table->integer('property_size');
            $table->string('property_status');
            $table->integer('num_floor');
            $table->integer('bed_rooms');
            $table->integer('bath_rooms');
            $table->float('first_pay');
            $table->string('payment_method');
            $table->string('payment_stages');
            $table->string('floor_plan_image');
            $table->boolean('is_active');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
