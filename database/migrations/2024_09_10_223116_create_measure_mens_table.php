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
        Schema::create('measure_mens', function (Blueprint $table) {
            $table->id();
            $table->string('full_shoulder_width');
            $table->string('sleeves');
            $table->string('full_chest');
            $table->string('waist');
            $table->string('hips');
            $table->string('front_shoulder_width');
            $table->string('back_shoulder_width');
            $table->string('front_jacket_length');
            $table->string('neck');
            $table->string('trouser waist');
            $table->string('crotch');
            $table->string('thigh');
            $table->string('throuser_length');
            $table->string('cuff');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measure_mens');
    }
};
