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
        Schema::create('meter_readings', function (Blueprint $table) {
            $table->id();
            $table->foreignId('appartment_id')->constrained('appartments')->cascadeOnUpdate()->noActionOnDelete();
            $table->foreignId('service_id')->constrained('services')->cascadeOnUpdate()->noActionOnDelete();
            $table->date('period');
            $table->float('value', 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('meter_readings');
    }
};
