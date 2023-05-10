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
        Schema::create('pases', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('buisness');
            $table->string('phone');
            $table->datetime('time_start');
            $table->datetime('time_end');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pases');
    }
};
