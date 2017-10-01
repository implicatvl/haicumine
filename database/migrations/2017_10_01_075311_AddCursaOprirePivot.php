<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCursaOprirePivot extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursa_oprire', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cursa_id')->unsigned();
            $table->foreign('cursa_id')->references('id')->on('Curse');
            $table->integer('oprire_id')->unsigned();
            $table->foreign('oprire_id')->references('id')->on('Opriri');
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
        Schema::dropIfExists('cursa_oprire');
    }
}
