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
        Schema::create('espacios__recursos', function (Blueprint $table) {
            $table->id();
            $table->timestamps(); 
            $table->unsignedBigInteger('espacio_id');
            $table->unsignedBigInteger('recurso_id');
            $table->foreign('espacio_id')
                ->references('id')
                ->on('espacios')
                ->onDelete('cascade');
            $table->foreign('recurso_id')
                ->references('id')
                ->on('recursos')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('espacios__recursos');
    }
};
