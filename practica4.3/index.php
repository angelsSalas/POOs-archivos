<?php
//llamando a las clases Docente y Alumno
require_once 'Docente.php';
require_once 'Alumno.php';

// Creando instancias de Docente y Alumno
$docente1 = new Docente("Roberto", "Solis", "Robles", 45, "Sistemas", "M.C.", 15);
$docente2 = new Docente("Ana", "Lopez", "Martinez", 38, "Matematicas", "Dr.", 10);
$docente3 = new Docente("Carlos", "Hernandez", "Gonzalez", 50, "Fisica", "M.E.", 20);
$docente4 = new Docente("Laura", "Martinez", "Sanchez", 30, "Biologia", "M.A.", 8);

$alumno1 = new Alumno("Alonso", "Lira", "Espinoza", 20, "Sistemas", 9.3, 5);
$alumno2 = new Alumno("Maria", "Gomez", "Perez", 19, "Matematicas", 8.7, 3);
$alumno3 = new Alumno("Pedro", "Ramirez", "Lopez", 21, "Fisica", 9.5, 4);
$alumno4 = new Alumno("Sofia", "Cruz", "Torres", 22, "Biologia", 8.9, 2);
// Mostrando los nombres completos de los docentes y alumnos
echo "<h2>Docentes</h2>";
echo $docente1->obtenerNombreCompleto() . "<br>";
echo $docente2->obtenerNombreCompleto() . "<br>";
echo $docente3->obtenerNombreCompleto() . "<br>";
echo $docente4->obtenerNombreCompleto() . "<br>";
echo "<h2>Alumnos</h2>";
echo "<br>";
echo $alumno1->obtenerNombreCompleto() . "<br>";
echo $alumno2->obtenerNombreCompleto() . "<br>";
echo $alumno3->obtenerNombreCompleto() . "<br>";
echo $alumno4->obtenerNombreCompleto() . "<br>";

?>