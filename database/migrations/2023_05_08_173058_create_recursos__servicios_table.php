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
        Schema::create('recursos__servicios', function (Blueprint $table) {
                $table->id();
                $table->timestamps(); 
                $table->unsignedBigInteger('recurso_id');
                $table->unsignedBigInteger('servicio_id');
                $table->foreign('recurso_id')
                    ->references('id')
                    ->on('recursos')
                    ->onDelete('cascade');
                $table->foreign('servicio_id')
                    ->references('id')
                    ->on('servicios')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('recursos__servicios');
    }
};
