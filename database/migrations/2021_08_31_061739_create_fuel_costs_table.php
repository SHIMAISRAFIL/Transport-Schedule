<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFuelCostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fuel_costs', function (Blueprint $table) {
            $table->id();
            $table->string('transportid', 100);
            $table->string('fueltype', 100);
            $table->integer('fuelprice');
            $table->integer('fuelquantity');
            $table->string('date');
            $table->string('place', 100);
            $table->string('remarks', 100)->nullable();
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
        Schema::dropIfExists('fuel_costs');
    }
}
