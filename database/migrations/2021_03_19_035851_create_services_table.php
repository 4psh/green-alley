<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('services', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('note');
            $table->text('description');
            $table->integer('min_price');
            $table->unsignedBigInteger('id_unit');
            $table->unsignedBigInteger('id_cat');
            $table->timestamps();

            $table->foreign('id_cat')->references('id')->on('categories_services')->onDelete('cascade');
            $table->foreign('id_unit')->references('id')->on('measure_units')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('services');
    }
}
