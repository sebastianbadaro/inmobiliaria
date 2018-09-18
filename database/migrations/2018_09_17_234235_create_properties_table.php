<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePropertiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('properties', function (Blueprint $table) {
           $table->engine = "InnoDB";
            $table->increments('id');
            $table->string('title');
            $table->string('address');
            $table->unsignedInteger('property_type_id');
            $table->integer('number_of_rooms');
            $table->integer('number_of_bathrooms');
            $table->integer('number_of_parking_spaces');
            $table->integer('total_surface');
            $table->integer('covered_surface');
            $table->unsignedInteger('city_id');
            $table->unsignedInteger('currency_id');
            $table->decimal('value');
            $table->unsignedInteger('category_id');
            $table->timestamps();
        });

        Schema::table('properties', function($table) {
          $table->foreign('property_type_id')->references('id')->on('property_types');
          $table->foreign('currency_id')->references('id')->on('currencies');
          $table->foreign('category_id')->references('id')->on('categories');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('properties');
    }
}
