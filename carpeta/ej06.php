<?php
require_once 'cajas.php';
// Crear una caja con dimensiones específicas
$caja = new Caja(12.5, 5.0, 8.8);
// Imprimir la caja directamente (se ejecuta __toString())
echo $caja;
?>