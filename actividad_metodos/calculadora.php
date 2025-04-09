<?php
// Incluir la clase
require_once 'actividad_metodos.php';
// Llamar al método de clase (estático)
echo Calculadora::mostrarMensaje() . "<br>";
// Crear una instancia de la clase
$miCalculadora = new Calculadora();
// Usar los métodos de instancia
echo "Suma de 5 + 3: " . $miCalculadora->sumar(5, 3) . "<br>";
echo "Resta de 15 - 5: " . $miCalculadora->restar(15, 5) . "<br>";
echo "Multiplicación de 4 * 2: " . $miCalculadora->multiplicar(4, 2) . "<br>";
echo "División de 20 / 2: " . $miCalculadora->dividir(20, 2) . "<br>";
?>
