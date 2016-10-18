<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up() {

        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('status')->default('pending');
            $table->string('type');
            $table->string('name');
            $table->string('company');
            $table->string('telephone');
            $table->string('locale')->default('en');
            $table->string('email')->unique();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down () {
        Schema::dropIfExists('users');
    }
}
