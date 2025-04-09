<?php
require_once 'cajas.php';
$caja = new Caja(12.5, 5.0, 8.8);

// Obtener los valores iniciales con getters
echo "Dimensiones iniciales:<br>";
echo "Ancho: " . $caja->getAncho() . "<br>";
echo "Alto: " . $caja->getAlto() . "<br>";
echo "Largo: " . $caja->getLargo() . "<br>";

// Modificar valores con setters
$caja->setAncho(12);
$caja->setAlto(6);
$caja->setLargo(10);

// Obtener los nuevos valores con getters
echo "<br>Dimensiones después de modificar con setters:<br>";
echo "Ancho: " . $caja->getAncho() . "<br>";
echo "Alto: " . $caja->getAlto() . "<br>";
echo "Largo: " . $caja->getLargo() . "<br>";

?>
