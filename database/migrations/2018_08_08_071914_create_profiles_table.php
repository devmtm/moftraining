<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('user_id');
            $table->string('social_no');
            $table->string('first_name');
            $table->string('middle_name');
            $table->string('last_name');

            $table->string('phone');
            $table->string('mobile');
            $table->string('birthdate');
            $table->enum('gender', ['Male', 'Female']);


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
        Schema::dropIfExists('profiles');
    }
}
