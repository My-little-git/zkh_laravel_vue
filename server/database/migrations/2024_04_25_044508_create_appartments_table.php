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
        Schema::create('appartments', function (Blueprint $table) {
            $table->id();
            $table->foreignId('city_id')->constrained('cities')->cascadeOnUpdate()->nullOnDelete();
            $table->string('street', 255);
            $table->string('building', 10);
            $table->unsignedSmallInteger('number');
            $table->unsignedTinyInteger('flat');
            $table->float('square', 2);
            $table->unsignedTinyInteger('residents');
            $table->foreignId('user_id')->constrained('users')->cascadeOnUpdate()->nullOnDelete();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appartments');
    }
};
