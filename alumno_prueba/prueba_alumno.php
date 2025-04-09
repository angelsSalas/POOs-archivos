<?php
// Incluir la clase Alumno
require_once 'alumno.php';
// Crear un objeto de la clase Alumno
$alumno1 = new Alumno();
echo"Alumno 1 <br>";
// Asignar valores usando los métodos setters
$alumno1->setNombre("Carlos");
$alumno1->setApellidos("Gómez Pérez");
$alumno1->setNumeroControl("A12345678");
//(reto)metodo que genera el correo del alumno
echo "Correo generado: " . $alumno1->generarCorreo("Carlos","A12345678");
echo"<br>";
// Mostrar los datos del alumno
$alumno1->mostrarDatos();
//retos
//generar un nuevo objeto de la clase alumno
$alumno2=new Alumno();
echo"<br>";
echo"Alumno 2 <br>";
//nuevo metodo que asigna los valores con una instruccion
$alumno2->asignarDatos ("juan","perez", "242311345");
//metodo que genera el correo del alumno
echo "Correo generado: " . $alumno1->generarCorreo("juan","242311345");
echo"<br>";
//se muestran los datos del alumno 2
echo $alumno2->mostrarDatos();
?>
