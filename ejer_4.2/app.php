<?php
require_once 'shape.php';

// Crear instancias de figuras bidimensionales
//circulo, cuadrado y triángulo
$circle = new Circle(5);
$circle->setNombre("Circle");
$circle->setColor("Red");
$circle->setRadio(5); // Asignar radio para el círculo 

$square = new Square(4);
$square->setNombre("Square");
$square->setColor("Blue");
$square->setLado(4); // Asignar lado para el cuadrado 

$triangle = new Triangle(3, 4);
$triangle->setNombre("Triangle");
$triangle->setColor("Green");
$triangle->setBase(3); // Asignar base para el triángulo 
$triangle->setAltura(4); // Asignar altura para el triángulo 


// Crear instancias de figuras tridimensionales
//esfera, cubo y pirámide
$sphere = new Sphere(6);
$sphere->setNombre("Sphere");
$sphere->setColor("Yellow");
$sphere->setRadio(6); // Asignar radio para la esfera 

$cube = new Cube(2);
$cube->setNombre("Cube");
$cube->setColor("Purple");
$cube->setLado(2); // Asignar lado para el cubo 

$pyramid = new Pyramid(4, 5);
$pyramid->setNombre("Pyramid");
$pyramid->setColor("Orange");
$pyramid->setBase(4); // Asignar base para la pirámide 
$pyramid->setAltura(5); // Asignar altura para la pirámide 

//echo para mostrar la información de las figuras bidimensionales
echo "2D Shapes: <br>";
echo "Name: " . $circle->getNombre() . ", Color: " . $circle->getColor() . ", radio: " . $circle->getRadio() . "<br> ";
echo "Name: " . $square->getNombre() . ", Color: " . $square->getColor() . ", lado: " . $square->getLado() . "<br> ";
echo "Name: " . $triangle->getNombre() . ", Color: " . $triangle->getColor() . ", base: " . $triangle->getBase() . ", altura: " . $triangle->getAltura() . "<br> "; 

//echo para mostrar la información de las figuras tridimensionales
echo "<br> ";
echo "3D Shapes:<br>";
echo "Name: " . $sphere->getNombre() . ", Color: " . $sphere->getColor() . ", radio: " . $sphere->getRadio() . "<br> ";
echo "Name: " . $cube->getNombre() . ", Color: " . $cube->getColor() . ", lado: " . $cube->getLado() . "<br> ";
echo "Name: " . $pyramid->getNombre() . ", Color: " . $pyramid->getColor() . ", base: " . $pyramid->getBase() . ", altura: " . $pyramid->getAltura() . "<br> ";
echo "<br> ";
