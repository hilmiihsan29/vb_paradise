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
        Schema::create('villas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('description')->nullable();
            $table->unsignedInteger('total_bedrooms');
            $table->unsignedInteger('total_adults');
            $table->unsignedInteger('total_kids');
            $table->unsignedInteger('total_infant');
            $table->string('cover');
            $table->bigInteger('price_rate', 50);
            $table->string('maps_url')->nullable();
            $table->text('terms_and_conditions')->nullable();
            $table->timestamps();
        });

    }
    public function down(): void
    {
        Schema::dropIfExists('villas');
    }
};
