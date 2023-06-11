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
        Schema::create('property_infos', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->integer('School');
            $table->integer('main_road');
            $table->integer('Mosque');
            $table->integer('commercial_centers');
            $table->boolean('water');
            $table->boolean('electricity');
            $table->boolean('water_well');
            $table->boolean('black_well');
            $table->boolean('elevator');
            $table->boolean('Swimming_pool');
            $table->boolean('outdoor_garden');
            $table->boolean('Sanitary_drainage');
            $table->string('site_rating');
            $table->integer('page_views');
            $table->integer('longitute');
            $table->integer('latitude');
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_infos');
    }
};
