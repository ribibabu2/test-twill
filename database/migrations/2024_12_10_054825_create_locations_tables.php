<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('locations', function (Blueprint $table) {
        $table->id();
        $table->string('name'); // Name of the location
        $table->text('description')->nullable(); // Description (optional)
        $table->timestamps(); // Created at and updated at
    });
}

public function down()
{
    Schema::dropIfExists('locations');
}


};
