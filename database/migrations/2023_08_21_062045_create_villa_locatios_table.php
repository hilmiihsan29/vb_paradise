<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('villa_locatios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('villa_id')->Unique();
            $table->unsignedBigInteger('location_id');
            $table->timestamps();

            $table->foreign('villa_id')->references('id')->on('villas')->onDelete('cascade');
            $table->foreign('location_id')->references('id')->on('locations')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('villa_locatios');
    }
};
