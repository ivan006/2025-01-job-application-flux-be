<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('task_statuses', function (Blueprint $table) {
            $table->id(); // Primary Key
            $table->string('name')->unique(); // Status name (e.g., Pending, Completed)
            $table->text('description')->nullable(); // Optional description
            $table->timestamps(); // Created at, Updated at
        });
    }

    public function down()
    {
        Schema::dropIfExists('task_statuses');
    }
};
