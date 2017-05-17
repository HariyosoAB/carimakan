<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePicture extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('picture', function(Blueprint $table){
            $table->increments('ID_Picture');
            $table->unsignedInteger('Picture_Resto');
            $table->string('Picture_Filename',1000);

            $table->foreign('Picture_Resto')->references('ID_Resto')->on('resto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('picture');
    }
}
