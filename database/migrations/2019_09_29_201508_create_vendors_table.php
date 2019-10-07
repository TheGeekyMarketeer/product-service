<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVendorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vendors', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('companyName')->unique();
            $table->string('contactFName');
            $table->string('contactNName');
            // $table->string('address1');
            // $table->string('address2');
            // $table->string('city');
            // $table->string('state');
            // $table->string('country');
            // $table->string('postalCode');
            // $table->string('email')->unique();
            // $table->string('social1')->unique();
            // $table->string('social2');
            // $table->string('social3');
            // $table->string('webSite')->unique();
            // $table->multiLineString('about');
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
        Schema::dropIfExists('vendors');
    }
}
