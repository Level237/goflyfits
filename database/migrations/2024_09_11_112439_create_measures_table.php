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
        Schema::create('measures', function (Blueprint $table) {
            $table->id();


            $table->string('full_shoulder_width')->nullable();
            $table->string('sleeves')->nullable();
            $table->string('full_chest')->nullable();
            $table->string('waist')->nullable();
            //$table->string('hips');
            //$table->string('front_shoulder_width');
            //$table->string('back_shoulder_width');
            //$table->string('front_jacket_length');
            //$table->string('neck');
            $table->string('trouser_waist')->nullable();
            $table->string('crotch')->nullable();
            $table->string('thigh')->nullable();
            //$table->string('throuser_length');
            //$table->string('cuff');

            $table->string('back_length')->nullable();
            //$table->string('bust')->nullable();
            $table->string('point_bust')->nullable();
            $table->string('sleeve_length')->nullable();
            $table->string('arm')->nullable();
            $table->string('armHole')->nullable();
            $table->string('coat_length')->nullable();
            $table->string('skirt_length')->nullable();
            $table->string('hight_hip')->nullable();
            $table->string('inseam')->nullable();
            $table->string('seat')->nullable();
            $table->string('inseam')->nullable();
            $table->string('trouser_thigh')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('measures');
    }
};
