<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePeopleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('people', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->integer('state_id')->unsigned();
            $table->integer('city_id')->unsigned();
            $table->integer('course_id')->unsigned();
            $table->string('name', 255);
            $table->string('email', 255);
            $table->string('cpf', 14);
            $table->date('data_of_birth');
            $table->string('phone', 14);
            $table->string('cep', 10);
            $table->string('street', 255);
            $table->string('number', 45);
            $table->string('neighborhood', 255);
            $table->string('complement', 45);
            $table->char('situation', 1);
            $table->string('status', 45);
            $table->foreign('user_id')->references('id')->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('state_id')->references('id')->on('states')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('city_id')->references('id')->on('cities')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('course_id')->references('id')->on('courses')
                ->onDelete('cascade')
                ->onUpdate('cascade');
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
        Schema::dropIfExists('people');
    }
}
