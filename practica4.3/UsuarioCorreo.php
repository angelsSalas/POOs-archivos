<?php
//clase abstracta UsuarioCorreo
abstract class UsuarioCorreo {
    // Atributos
    private static $contadorID = 1;
    private $id;
    private $nombre;
    private $apellidoPaterno;
    private $apellidoMaterno;
    private $edad;
    private $departamento;
    // Constructor
    public function Setconstruct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento) {
        $this->id = self::$contadorID++;
        $this->nombre = $nombre;
        $this->apellidoPaterno = $apellidoPaterno;
        $this->apellidoMaterno = $apellidoMaterno;
        $this->edad = $edad;
        $this->departamento = $departamento;
    }
    // Métodos para establecer y obtener los atributos
    public function SetNombre($nuevoNombre) {
        $this->nombre = $nuevoNombre;
    }

    public function SetEdad($nuevaEdad) {
        $this->edad = $nuevaEdad;
    }

    public function SetDepartamento($nuevoDepartamento) {
        $this->departamento = $nuevoDepartamento;
    }

    public function GetID() {
        return $this->id;
    }

    public function GetEdad() {
        return $this->edad;
    }

    public function GetDepartamento() {
        return $this->departamento;
    }
    public function GetNombre() {
        return $this->nombre;
    }
    
    public function GetApellidoPaterno() {
        return $this->apellidoPaterno;
    }
    
    public function GetApellidoMaterno() {
        return $this->apellidoMaterno;
    }
    // Método abstracto para forzar que las clases hijas lo implementen
    abstract public function obtenerNombreCompleto();

}

?>