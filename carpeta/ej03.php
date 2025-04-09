<?php
require_once 'cajas.php';
$caja = new Caja(12.5, 5.0, 8.8);

// Calcular y mostrar el área total
echo "El área total de la caja es: " . $caja->areaTotal() . "<br>";
?>
