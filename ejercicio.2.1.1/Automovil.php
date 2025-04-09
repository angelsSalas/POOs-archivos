<?php
class Automovil {
 public $color;
 public $marca;
 public $numeroPuertas;
 private $esCamioneta;
 // Constructor para inicializar atributos
 public function __construct($color, $marca, $numeroPuertas, $esCamioneta) {
 $this->color = $color;
 $this->marca = $marca;
 $this->numeroPuertas = $numeroPuertas;
 $this->esCamioneta = $esCamioneta;
 }
 // Método para verificar si es camioneta
 public function esCamioneta() {
 return $this->esCamioneta ? "Sí, es una camioneta" : "No, no es una camioneta";
 }
 // Método para mostrar información del automóvil
 public function mostrarDatos() {
 return "Marca: $this->marca<br>
 Color: $this->color<br>
 Número de Puertas: $this->numeroPuertas<br>
 ¿Es camioneta?: " . $this->esCamioneta();
 }
 
 //metodo que modifica el color del automovil
 public function modificarcolor($nuevocolor) {
    $this->color= $nuevocolor;
}
}
?>
