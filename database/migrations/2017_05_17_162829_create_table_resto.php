<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableResto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('resto', function(Blueprint $table){
            $table->increments('ID_Resto');
            $table->string('Resto_Name', 140);
            $table->string('Resto_Description', 500);
            $table->string('Resto_Location', 140);
            $table->string('Resto_City', 20);
            $table->integer('Type')->nullable();
            $table->integer('Price_Min');
            $table->integer('Price_Max');
            $table->time('Hours_Start');
            $table->time('Hours_Closed');
            $table->integer('Wifi');
            $table->integer('Reservation');
            $table->integer('Smoking_Area');
            $table->integer('Free_Parking');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('resto');
    }
}
