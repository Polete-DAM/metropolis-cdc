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
        Schema::create('reservas__pases', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->unsignedBigInteger('reserva_id');
            $table->unsignedBigInteger('pase_id');
            $table->foreign('reserva_id')
                ->references('id')
                ->on('reservas')
                ->onDelete('cascade');
            $table->foreign('pase_id')
                ->references('id')
                ->on('pases')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas__pases');
    }
};
