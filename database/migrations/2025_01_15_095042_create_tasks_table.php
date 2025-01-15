<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->foreignId('to_do_list_id')->constrained()->cascadeOnDelete(); // FK to To-Do Lists
            $table->foreignId('status_id')->constrained('task_statuses')->cascadeOnDelete(); // FK to Task Statuses
            $table->string('name'); // Name of the task
            $table->timestamps(); // Created at, Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('tasks');
    }
};
