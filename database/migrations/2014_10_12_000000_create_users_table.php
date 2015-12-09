<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('firstname',225);
            $table->string('lastname',225);
            $table->longText('address');
            $table->string('contact_number',225);
            $table->string('email')->unique();
            $table->string('verification_code',225);
            $table->tinyInteger('is_verified')->nullable();
            $table->string('password', 60);
            $table->integer('types_id')->unsigned()->index();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('types_id')
                  ->references('id')
                  ->on('types')
                  ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
    }
}
