<?php
require_once 'cajas.php';
// Crear una caja original con dimensiones específicas
$caja1 = new Caja(12.5, 5.0, 8.8);

// Copiar la caja usando el método copiarCaja()
$cajaCopia = Caja::copiarCaja($caja1);

// Mostrar ambas cajas
echo "Caja original: " . $caja1 . "<br>";
echo "Caja copiada: " . $cajaCopia . "<br>";

?>
