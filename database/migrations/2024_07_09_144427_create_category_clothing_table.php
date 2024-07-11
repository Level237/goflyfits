<?php

use App\Models\Category;
use App\Models\Clothing;
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
        Schema::create('category_clothing', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Category::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->foreignIdFor(Clothing::class)
            ->constrained()
            ->restrictOnUpdate()
            ->restrictOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('category_clothing');
    }
};
