<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarColumnaDireccionTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // alter table
        Schema::table('persona', function (Blueprint $table) {
            $table->string('direccion', 200)->nullable(); // agregar una columna: direccion
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        // alter table
        Schema::table('persona', function (Blueprint $table) {
            $table->dropColumn('direccion'); // eliminar una columna: direccion
        });
    }
}
