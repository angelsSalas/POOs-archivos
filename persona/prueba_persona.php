<?php
// Incluir la clase Persona
require_once 'persona.php';
// Crear un objeto de la clase Persona
$persona1 = new Persona();
// Intentar acceder a las propiedades directamente
echo "Accediendo directamente a las propiedades:<br>";
echo "Nombre: " . $persona1->nombre . "<br>"; // Sí Se puede acceder
// Mostrar datos desde el método dentro de la clase
echo "<br>Accediendo a las propiedades mediante el método mostrarDatos():<br>";
$persona1->mostrarDatos();
echo "<br>";
echo "Accediendo a las propiedades mediante getters y setters<br>";
//metodo get que accede a las propiedades ocultas
echo $persona1->getDatos() . "<br>";
//metodo set para obtener una nueva DNI
$persona1->setNuevaDNI(242310285);
// Mostrar el nuevo DNI mediante un metodo get
echo "Nuevo DNI: " . $persona1->getDni() . "<br>";
?>