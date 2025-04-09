<?php
class Persona {
 // Propiedades con diferentes niveles de acceso
 public $nombre = "Carlos";
 private $edad = 25;
 protected $dni = "12345678X";
 // Método para acceder a las propiedades dentro de la clase
 public function mostrarDatos() {
 echo "Nombre: " . $this->nombre . "<br>";
 echo "Edad: " . $this->edad . "<br>";
 echo "DNI: " . $this->dni . "<br>";
 }
 //metodo get para obtener los datos sin necesidad de modificar la visibilidad 
 public function getDatos(){
    return "Nombre: " . $this->nombre . "<br>Edad: " . $this->edad . "<br>DNI: " . $this->dni;
 }
 //metodo set para modificar la DNIS
 public function setNuevaDNI($nuevaDNI){
    $this->dni = $nuevaDNI;
 }
 //metodo get para mostrar la nueva dni
  public function getDni() {
    return $this->dni;
}
}
?>