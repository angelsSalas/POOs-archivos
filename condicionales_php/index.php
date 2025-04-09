<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Actividad (ABP) Análisis de Caracteres en un Texto </title>
</head>
<body></body>
<?php
// Definimos dos números para comparar
$numero1 = 10;
$numero2 = 20;
// Estructura IF
echo "<h2>Ejemplo con IF</h2>";
if ($numero1 < $numero2) {
 echo "El número $numero1 es menor que $numero2";
}
// Estructura IF-ELSE
echo "<h2>Ejemplo con IF-ELSE</h2>";
if ($numero1 > $numero2) {
 echo "El número $numero1 es mayor que $numero2";
} else {
 echo "El número $numero1 NO es mayor que $numero2";
}
// Estructura IF-ELSEIF-ELSE con temperatura
$temperatura = -5;
$clima = "verano";

echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>";
//if para comprovar si la temperatura supera los 30 grados
if ($temperatura > 30) {
 echo "Hace mucho calor 🥵, ";
//Estructura if que considera la estacion del año
 if ($clima="verano"){
        echo "Es un dia normal de verano";
    }
    elseif($clima="invierno"){
        echo "Es un dia caluroso de invierno";
     }
//elseif para comprovar si la temperatura se encuentra entre los 30  y los 15 grados
} elseif ($temperatura >= 15 && $temperatura <= 30) {
 echo "El clima es agradable 😊, ";
//Estructura if que considera la estacion del año
    if ($clima="verano"){
        echo "Es un dia no tan caluroso de verano";
    }
    elseif($clima="invierno"){
        echo "Es un dia no tan frio de invierno";
    }
//elseif para comprobar si la temperatura se encuentra entre los 0 y los 15 grados
} elseif( $temperatura <= 14 && $temperatura >= 0) {
 echo "Hace frío 🥶, ";
 //Estructura if que considera la estacion del año
    if ($clima="verano"){
        echo "Es un dia inusual de verano";
    }
    elseif($clima="invierno"){
        echo "Es un dia normal de invierno";
}
}
//else que señala la ultima opcion posible, que se encuentra por debajo de los 0 grados
else {
    echo"Esta por debajo de cero, ";
    //Estructura if que considera la estacion del año
    if ($clima="verano"){
        echo "Es un dia muy inusual de verano";
    } 
    elseif($clima="invierno"){
        echo "Es un dia muy frio de invierno";
    }
}
//conclusiones
//las estructuras if son muy importantes para la toma de decisiones y para la divergencia de opciones
//por lo que aprender su estructura es de suma importancia si se quiere aprender a programar correctamente
?>
 </body>
</html>
