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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id')->references('id')->on('users');
            $table->string('country');
            $table->string('city');
            $table->string('area');
            $table->string('landmark');
            $table->string('landmark1');
            $table->string('landmark2');
            $table->string('landmark3');
            $table->string('landmark4');
            $table->string('landmark5');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('addresses');
    }
};
