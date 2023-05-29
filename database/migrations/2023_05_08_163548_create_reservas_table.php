<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /* Run the migrations. */
  public function up(): void{
    Schema::create('reservas', function (Blueprint $table) {
        $table->id();
        $table->string('event');
        $table->string('email');
        $table->string('company_name');
        $table->string('space');
        $table->datetime('start_date');
        $table->datetime('end_date');
        $table->integer('n_attendees');
        $table->integer('n_bus_pass');
        $table->integer('n_staff_pass');
        $table->integer('n_parking_pass');
        $table->string('accepted');
        $table->timestamps();});
    }

    /* Reverse the migrations. */
  public function down(): void{
    Schema::dropIfExists('reservas');
}
};
