<?php
require_once 'cajas.php';
$caja1 = new Caja(12.5, 5.0, 8.8);

// Llamar a los métodos de la clase
echo "Volumen de la caja: " . $caja1->volumen() . "<br>";
echo "Área total de la caja: " . $caja1->areaTotal() . "<br>";

?>