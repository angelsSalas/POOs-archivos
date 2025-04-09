<?php
require_once 'metodos.php';
// Instanciar objetos de la clase Perro
$perro1 = new Perro("lula", "chihuahua");
$perro2 = new Perro("akira", "pastor belga");
$perro3 = new Perro("milo", "pug");
// conversacionentre los perros
echo "<h1>perros conversando</h1>";
echo $perro1->presentarse() . "<br>";
echo $perro1->ladrar() . "<br>";
echo $perro2->presentarse() . "<br>";
echo $perro2->ladrarMayus() . "<br>";
echo $perro3->presentarse() . "<br>";
echo $perro3->ladrarMinus() . "<br>";
?>