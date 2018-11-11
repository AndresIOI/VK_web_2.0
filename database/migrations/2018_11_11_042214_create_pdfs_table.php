<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePdfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pdfs', function (Blueprint $table) {
            $table->increments('id_pdf');
            $table->string('titulo_pdf',191);
            $table->string('pdf',191);
            $table->string('imagen',191);
            $table->unsignedInteger('usuario_id');
            $table->unsignedInteger('etiqueta_id');
            $table->foreign('usuario_id')->references('id')->on('users');
            $table->foreign('etiqueta_id')->references('id_etiqueta')->on('etiquetas');
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
        Schema::dropIfExists('pdfs');
    }
}
