<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTblSocieteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_societe', function (Blueprint $table) {
            $table->increments('id_societe');
            $table->string('nom_societe');
            $table->integer('id_categorie');
            $table->integer('id_produit');
            $table->longText('societe_short_description');
            $table->longText('societe_long_description');
            $table->string('image_societe');
            //$table->string('video_societe');
            $table->integer('statut_publication');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tbl_societe');
    }
}
