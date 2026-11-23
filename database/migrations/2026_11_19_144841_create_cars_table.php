<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        //аааааааа
        Schema::create('cars', function (Blueprint $table) {
            $table->id();
            $table->string('pasport');
            $table->integer('year');
            $table->string('price');
            $table->integer('mileage');
            $table->string('status');
            $table->unsignedBigInteger('model_id');
            $table->foreign('model_id')->references('id')->on('models')->onDelete('cascade');
            $table->unsignedBigInteger('color_id');
            $table->foreign('color_id')->references('id')->on('colors')->onDelete('cascade');
            $table->unsignedBigInteger('transmission_id');
            $table->foreign('transmission_id')->references('id')->on('transmissions')->onDelete('cascade');
            $table->timestamps();
        });
    } 
    public function down(): void { Schema::dropIfExists('cars'); }
};