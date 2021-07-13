<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDireccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('direcciones')) {
            Schema::create('direcciones', function (Blueprint $table) {
                $table->bigIncrements('id');
                $table->unsignedBigInteger('id_usuario')->default();
                $table->string('calle');
                $table->timestamps();
            });
        }

        Schema::table('direcciones', function (Blueprint $table) {
            $table->foreign('id_usuario')->references('id')->on('usuarios_models')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('direcciones')) {
            Schema::table('direcciones', function (Blueprint $table) {
                Schema::dropIfExists('direcciones');
                /*$table->dropForeign('id_usuario'); //
                $table->dropColumn('id_usuario');
                dd('borrada');*/
            });
            //Schema::dropIfExists('direcciones');
        }
    }
}
