<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('properties', function (Blueprint $table) {
        $table->id();
        $table->foreignId('location_id')->constrained()->onDelete('cascade'); // Foreign key to location
        $table->string('name'); // Name for property
        $table->timestamps();
    });
}


public function down()
{
    
    Schema::dropIfExists('properties');
}

};
