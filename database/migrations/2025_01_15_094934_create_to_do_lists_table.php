<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('to_do_lists', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name'); // Name of the To-Do List
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created at, Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('to_do_lists');
    }
};
