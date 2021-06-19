<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesStylesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images_styles', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBigInteger('style_id');
            $table->timestamps();

            $table->foreign('style_id')->references('id')->on('styles')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('images_styles');
    }
}
