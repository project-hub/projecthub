<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserSkillsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_skills', function (Blueprint $table) {
            $table->increments('id');

            $table->integer('skill_id')->unsigned();
            $table->foreign('skill_id')->references('id')->on('skills');

            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');

            // $table->string('name')->unsigned();
            // $table->foreign('name')->references('name')->on('skills');

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
        Schema::drop('user_skills');
    }
}
