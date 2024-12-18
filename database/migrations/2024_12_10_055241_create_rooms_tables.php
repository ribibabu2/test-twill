<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('rooms', function (Blueprint $table) {
        $table->id();
        $table->foreignId('property_id')->constrained()->onDelete('cascade'); // Foreign key to property
        $table->string('name'); // Name of the room
        $table->timestamps();
    });
}


public function down()
{
  
    Schema::dropIfExists('rooms');
}

};
