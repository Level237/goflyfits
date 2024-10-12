<?php

use App\Models\Clothing;
use App\Models\User;
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
        Schema::create('payments', function (Blueprint $table) {
            $table->id();
            $table->string('price');

            $table->foreignIdFor(User::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnUpdate();

            $table->foreignIdFor(Clothing::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnUpdate();
            $table->string('means_payment');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payments');
    }
};
