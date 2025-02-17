<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id();
            $table->string('tourname', 255)->nullable();
            $table->string('slug', 255)->nullable()->unique(); 
            $table->string('image', 255)->nullable(); 
            $table->string('description', 255)->nullable();
            $table->decimal('price', 10, 2)->nullable();
            $table->timestamps(); 
        });
    }

    public function down()
    {
        Schema::dropIfExists('tour_packages');
    }
};