<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('villa_gallery', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('villa_id');
            $table->string('gallery_image')->unique();
            $table->timestamps();

            $table->foreign('villa_id')->references('id')->on('villas')->onDelete('cascade');
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('villa_gallery');
    }
};
