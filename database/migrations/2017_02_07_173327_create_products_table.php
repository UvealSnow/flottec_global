<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('category_id');
            $table->string('uri');
            $table->string('classification_en');
            $table->string('classification_es')->nullable();
            $table->string('name');
            $table->string('mineral');
            $table->longtext('chemical_description_en');
            $table->longtext('chemical_description_es')->nullable();
            $table->string('chemical_family_es');
            $table->string('chemical_family_en')->nullable();
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
