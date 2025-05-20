<?php

// Declarar el arreglo asociativo USUARIO
$usuario = array(
    "Nombre" => "Juan",
    "Edad" => 20,
    "Email" => "Juan123@itslerdo.edu.mx",
    "Carrera" => "Informatica");

    // Mostrar el arreglo asociativo
    echo "Nombre: " . $usuario["Nombre"] . "<br>";
    echo "Edad: " . $usuario["Edad"] . "<br>";
    echo "Email: " . $usuario["Email"] . "<br>";
    echo "Carrera: " . $usuario["Carrera"] . "<br>";
    //cambiar el valor de la edad
    $usuario["Edad"] = 22;
    //Agregar el campo "activo"
    $usuario["Activo"] = true;
    //Mostrear el arreglom completo
    echo "Array completo: <br>";
    print_r($usuario);

