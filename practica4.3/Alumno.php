<?php
//llamando a la clase UsuarioCorreo
require_once 'UsuarioCorreo.php';
//llamando a la clase Alumno
class Alumno extends UsuarioCorreo {
    // Atributos
    private $gradoAcademico;
    private $antiguedad;
    // Constructor
    public function __construct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento, $gradoAcademico, $antiguedad) {
        parent::Setconstruct($nombre, $apellidoPaterno, $apellidoMaterno, $edad, $departamento);
        $this->gradoAcademico = $gradoAcademico;
        $this->antiguedad = $antiguedad;
    }
    // Métodos para establecer y obtener los atributos
    public function setGradoAcademico($nuevoGrado) {
        $this->gradoAcademico = $nuevoGrado;
    }

    public function setAntiguedad($nuevaAntiguedad) {
        $this->antiguedad = $nuevaAntiguedad;
    }
    
    public function obtenerNombreCompleto() {        
        return "{$this->gradoAcademico} {$this->GetNombre()} {$this->GetApellidoPaterno()} {$this->GetApellidoMaterno()}";
    }
}
?>