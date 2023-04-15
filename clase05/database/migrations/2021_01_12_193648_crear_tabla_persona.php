<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablaPersona extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->string('apellido_paterno', 50)->comment('Columna para el apellido paterno');
            $table->string('apellido_materno', 50);
            $table->string('nombres', 60);
            $table->date('fecha_nacimiento');
            $table->decimal('peso', 15, 7);
            $table->char('dni', 8);
            $table->boolean('activo')->default(true);
            $table->enum('estado_civil', ['Soltero', 'Casado', 'Viudo']); // masculino, femenino
            // 10 000 000.9959654 => 5, 2
            // 'id' => bigInteger, unsigned, primary key, auto increment, sequence
            $table->timestamps();
            // created_at => timestamp => guardar la fecha y hora en que se registro
            // updated_at => timestamp => guardar la fecha y hora de la ultima actualización
            $table->softDeletes(); // eliminacion suave
            // deleted_at => timestamp => guardar la fecha y hora de la eliminación del registro
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persona');
    }
}
