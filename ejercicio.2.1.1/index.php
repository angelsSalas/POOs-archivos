<?php
require 'Automovil.php'; // Incluimos la clase Automovil
// Crear instancias de Automovil
$auto1 = new Automovil("Rojo", "Toyota", 4, false);
$auto2 = new Automovil("Negro", "Ford", 2, true);
//nuevos objetos
$auto3 = new Automovil("verde", "atos",2, false);
$auto4 = new Automovil("negro", "BMW", 4, false);
// Mostrar información de los autos
echo "<h2>Información del Automóvil 1</h2>";
echo $auto1->mostrarDatos();
echo "<h2>Información del Automóvil 2</h2>";
echo $auto2->mostrarDatos();
//mostrar informacion de los nuevos autos
echo "<h2>Información del Automóvil 3</h2>";
echo $auto3->mostrarDatos();
echo "<h2>Información del Automóvil 4</h2>";
echo $auto4->mostrarDatos();
?>