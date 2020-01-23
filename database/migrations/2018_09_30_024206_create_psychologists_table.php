<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychologistsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychologists', function (Blueprint $table) {
            $table->increments('id');
            $table->string('crp', 8);
            $table->string('therapeutic_approach', 255);
            $table->string('public', 45);
            $table->char('status');
            $table->integer('specialties_id')->unsigned();
            $table->integer('level_id')->unsigned();
            $table->integer('people_id')->unsigned();
            $table->foreign('specialties_id')->references('id')->on('specialties')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('level_id')->references('id')->on('levels')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->foreign('people_id')->references('id')->on('peoples')
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
        Schema::dropIfExists('psychologists');
    }
}
