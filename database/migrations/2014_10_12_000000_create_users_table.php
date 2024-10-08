<?php

use App\Models\Measure;
use App\Models\Role;
use App\Models\Town;
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
        Schema::disableForeignKeyConstraints();
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name')->unique();
            $table->string('full_name');
            $table->string('birthday');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->foreignIdFor(Role::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreignIdFor(Measure::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->foreignIdFor(Town::class)
            ->constrained()
            ->cascadeOnDelete()
            ->cascadeOnUpdate();
            $table->string('country')->default("cameroon");
            $table->string('phone_number')->unique();
            $table->rememberToken();
            $table->boolean("isChoice")->default(0);

            $table->boolean('gender_user');
            $table->string('weight')->nullable();
            $table->string('height')->nullable();
            $table->string('size')->nullable();
            $table->string('color');
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
