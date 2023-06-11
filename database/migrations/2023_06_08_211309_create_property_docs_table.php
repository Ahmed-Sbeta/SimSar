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
        Schema::create('property_docs', function (Blueprint $table) {
            $table->id();
            $table->integer('property_id');
            $table->boolean('realestate_certificate');
            $table->boolean('building_permit');
            $table->boolean('purchase_contract');
            $table->boolean('ownership_cirtificate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_docs');
    }
};
