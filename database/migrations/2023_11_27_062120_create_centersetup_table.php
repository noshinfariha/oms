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
        Schema::create('centersetup', function (Blueprint $table) {
            $table->id();
            $table->string('task_id');
            $table->text('module');
            $table->string('task');
            $table->string('start_date');
            $table->string('end_date');
            $table->string('notes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('centersetup');
    }
};
