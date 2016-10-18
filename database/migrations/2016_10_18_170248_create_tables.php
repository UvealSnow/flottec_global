<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up () {

        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->string('category');
            $table->string('classification');
            $table->string('name');
            $table->string('mineral');
            $table->string('chemical_description');
            $table->string('chemical_family');
            $table->timestamps();
        });

        Schema::create('safety_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('name');
            $table->string('english_sheet')->nullable();
            $table->string('spanish_sheet')->nullable();
            $table->timestamps();
        });

        Schema::create('tech_sheets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('product_id');
            $table->string('tech_sheet');
            $table->timestamps();
        });

        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->string('title');
            $table->string('body');
            $table->timestamps();
        });

        Schema::create('files', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('post_id');
            $table->string('file');
            $table->timestamps();
        });

        Schema::create('blacklist', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('domain');
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
        Schema::dropIfExists('products');
    }
}
