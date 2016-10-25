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
            $table->string('first_name');
            $table->string('last_name');
            $table->string('company_name');
            $table->string('address');
            $table->string('city');
            $table->string('state');
            $table->integer('zip_code');
            $table->string('email')->unique();
            $table->boolean('employer')->default(0);
            $table->text('content');
            $table->string('linkedIn')->nullable();
            $table->string('github')->nullable();
            $table->string('website')->nullable();
            $table->binary('image');
            $table->string('password', 60);
            $table->rememberToken();
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
