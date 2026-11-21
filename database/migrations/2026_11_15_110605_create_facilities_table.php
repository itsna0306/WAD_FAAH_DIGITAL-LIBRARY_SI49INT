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
    Schema::create('facilities', function (Blueprint $table) {
        $table->id();
        $table->string('area_name');
        $table->integer('floor_number');
        $table->string('area_number')->unique();
        $table->enum('area_type', [
            'Reading Room',
            'Silent Room',
            'Discussion Room'
        ]);
        $table->boolean('has_wifi')->default(false);
        $table->boolean('has_power_outlet')->default(false);
        $table->enum('status', [
            'available',
            'occupied',
            'maintenance'
        ])->default('available');
        $table->text('description')->nullable();
        $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('facilities');
    }
};
