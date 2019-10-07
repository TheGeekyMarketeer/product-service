<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('imageUrl')->unique();
            $table->string('secureImageUrl')->unique();
            $table->text('description');
            $table->boolean('thumbnail');
            $table->bigInteger('productId')->unsigned();
            $table->foreign('productId')->references('id')->on('products');
            $table->integer('sizeX');
            $table->integer('sizeY');
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
        Schema::dropIfExists('images');
    }
}
