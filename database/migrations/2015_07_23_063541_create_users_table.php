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
        Schema::create('users', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('login')->unique();
            $table->string('password', 60);
            $table->string('email', 254)->unique();
            $table->string('name');
            $table->string('surname');
            $table->date('date');
            $table->boolean('notifications');
            $table->string('about_me');
            $table->json('interest');
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
        Schema::drop('users');
    }
}
