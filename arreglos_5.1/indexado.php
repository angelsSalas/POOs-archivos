
<?php

// Declarar el arreglo indexado
$colores = array("rojo", "verde", "azul", "amarillo", "naranja");
// Mostrar el arreglo indexado
echo "Colores: ";
foreach ($colores as $color) {
    echo $color . ",";
}
echo "<br>";
// Mostrar el primer y último elemento del arreglo
echo "primer color: " . $colores[0] . "<br>";
echo "ultimo color: " . $colores[count($colores) - 1] . "<br>";
// Mostrar la cantidad de elementos del arreglo
echo "cantidad de colores: " . count($colores) . "<br>";
