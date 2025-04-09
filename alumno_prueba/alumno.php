<?php
class Alumno {
 // Propiedades privadas
 private $nombre;
 private $apellidos;
 private $numeroControl;
 // Método Setter para asignar valores
 public function setNombre($nombre) {
 $this->nombre = $nombre;
 }
 public function setApellidos($apellidos) {
 $this->apellidos = $apellidos;
 }
 public function setNumeroControl($numeroControl) {
 $this->numeroControl = $numeroControl;
 }
 // Método para mostrar los datos del alumno
 public function mostrarDatos() {
 echo "Nombre: " . $this->nombre . "<br>";
 echo "Apellidos: " . $this->apellidos . "<br>";
 echo "Número de Control: " . $this->numeroControl . "<br>";
 }
 //(reto)metodo que permite asignar los datos con una instruccion
 public function asignarDatos($nombre, $apellidos, $numeroControl) {
    $this->nombre = $nombre;
    $this->apellidos = $apellidos;
    $this->numeroControl = $numeroControl;
 }
//metodo que genera un correo en base a el nombre y numero de control
 public function generarCorreo($nombre, $numeroControl) {
    //regresa el nombre y apellido, seguido de lo correspondiente a un correo
    return $nombre.$numeroControl."@itslerdo.edu.mx"  ;
 }
}
?>
