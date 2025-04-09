<?php
require_once 'cajas.php';
// Crear una caja original con dimensiones específicas
$caja = new Caja(12.5, 5.0, 8.8);

// Crear una caja un 25% más grande
$cajaGrande = $caja->cajaMasGrande();

// Crear una caja un 25% más pequeña
$cajaPequena = $caja->cajaMasPequena();

// Mostrar las dimensiones de cada caja
echo "Caja original: " . $caja . "<br>";
echo "Caja más grande: " . $cajaGrande . "<br>";
echo "Caja más pequeña: " . $cajaPequena . "<br>";
?>