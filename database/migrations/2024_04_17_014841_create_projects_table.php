<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('company');
            $table->string('type');
            $table->date('start_date');  // or $table->datetime('start_date') if time is also needed
            $table->date('end_date')->nullable();  // Assuming it can be nullable
            $table->text('description');
            $table->string('image')->nullable(); // Stores the path to the image file
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
