<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('persona', function (Blueprint $table) {
            $table->id();
            $table->string('apellido_paterno',50)->comment('columna para el apellido paterno');
            $table->string('apellido_materno',50);
            $table->string('nombre',60);
            $table->date('fecha_nacimineto');
            $table->decimal('peso',15,7);
            $table->char('dni',8);
            $table->boolean('activo')->default(true);
            $table->enum('sexo',['Masculino','Femenino']); // masculino o femenino
            $table->enum('estado_civil',['Soltero','Casado','Viudo','Divorciado']);
            $table->timestamps();
            $table->softDeletes(); //eliminación suave
            //delete_at => timestamp => guardar la fecha y hora  de la eliminación del registro
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
