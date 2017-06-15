<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Designs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('designs', function(Blueprint $table){
            $table->increments('id');
            $table->string('autor');
            $table->string('price');
            $table->timestamps();
            $table->integer('Id_cat')->unsigned();
            $table->foreign('Id_cat')->references('Id_cat')->on('cat_categorias');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('designs');
    }
}
