<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegularTripsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('regular_trips', function (Blueprint $table) {
            $table->id();
            $table->string('date', 100);
            $table->string('time', 100);
            $table->string('location', 20);
            $table->string('driver_name', 20);
            $table->string('transport_number', 50);
          
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('regular_trips');
    }
}
