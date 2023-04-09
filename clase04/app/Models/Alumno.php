<?php

namespace Sistema\Models;

class Alumno{
    public $nombre;
    public $apellidos;

    public function nombreCompleto(){
        return $this->apellidos ." ". $this->nombre;
    }
}