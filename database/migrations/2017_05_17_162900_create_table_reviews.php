<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableReviews extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function(Blueprint $table) {
            $table->increments('ID_Reviews');
            $table->string('Reviews_Author', 191);
            $table->unsignedInteger('Reviews_Resto');
            $table->string('Reviews_Description', 2000);
            $table->integer('Reviews_Price');
            $table->integer('Reviews_Place');
            $table->integer('Reviews_Service');
            $table->integer('Reviews_Food');
            $table->timestamp('Reviews_Time')->default(\DB::raw('CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP'));

            $table->foreign('Reviews_Author')->references('Username')->on('user')->onDelete('cascade');
            $table->foreign('Reviews_Resto')->references('ID_Resto')->on('resto')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
