<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
class Calculadora {
 // Método de instancia para sumar
 public function sumar($a, $b) {
 return $a + $b;
 }
 //metodo de instancia para restar(Reto 1)
 public function restar($a, $b) {
    return $a - $b;
}
 // Método de instancia para multiplicar
 public function multiplicar($a, $b) {
 return $a * $b;
 }
 //metodo de instancia para dividir(Reto 2)
 public function dividir($a, $b) {
    if ($b == 0) {
        return "Error: No se puede dividir entre 0.";
    }
    return $a / $b;
}
 // Método de clase (estático) para mostrar un mensaje
 public static function mostrarMensaje() {
 return "Bienvenido a la Calculadora en PHP 🚀";
 }
}
?>

</body>
</html>