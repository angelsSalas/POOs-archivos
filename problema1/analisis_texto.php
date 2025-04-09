<!DOCTYPE html>
<html lang="es">
<head>
 <meta charset="UTF-8">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Actividad (ABP) Análisis de Caracteres en un Texto </title>
</head>
<body>
<?php
//captura de texto
$texto="¡Hola mundo!, este codigo estuvo tardado :C";
//iniciarndo contadores
$vocalesMayus=0;
$vocalesMinus=0;
$vocales = 0;

$consonantesMayus=0;
$consonantesMinus=0;
$consonantes = 0;

$signos=0;
$espacios=0;
//lista de caracteres 
$vocales_lista="AEIOUaeiou";
$vocales_listaMayus="AEIOU";
$vocales_listaMinus="aeiou";
$signos_lista=",.;:!¡?¿()/-";
$consonantes_lista="BCDFGHLKLMNÑPQRSTVWXYZbcdfghjklmnñpqrstvwxyz";
$consonantesMayus_lista="BCDFGHLKLMNÑPQRSTVWXYZ";
$consonantesMinus_lista="bcdfghjklmnñpqrstvwxyz";
//for para identificar caracter por caracter
for ($i = 0; $i < strlen($texto); $i++) 
{
    $char = $texto[$i];
    if (ctype_alpha($char)) 
    { 
        // Verifica si es una letra
        if (strpos( $vocales_lista,  $char) !== false)
        {
            //verifica si es vocal mayuscula o minuscula
        $vocales++;
            if((strpos($vocales_listaMayus, $char) !== false)){
                $vocalesMayus++;
            }
            else{
                $vocalesMinus++;
            }
        } 
        else
        {
            //verifica si es consonante mayuscula o minuscula
        $consonantes++;
             if (strpos($consonantesMayus_lista, $char) !== false){
                    $consonantesMayus++;
             }
             else{
                    $consonantesMinus++;
             }
        }
        } 
        //verifica si es signo
        elseif (strpos($signos_lista, $char) !== false) 
        {
        $signos++;
        } 
        //verifica si es un espacio
        elseif ($char == " ")
        {
        $espacios++;
        }
}
    //secuencia if que verifica el largo de el texto y muestra un mensaje segun sea el largo
    if (strlen($texto) < 5 ){
        $largo="El texto es cortito";
    }
    elseif(strlen($texto) <=10){
        $largo="El texto es medio";       
    }
    else{
        $largo="El texto es largo";
    }

    //porcentaje de caracteres
    $PorVocales=($vocales*100)/strlen($texto);
    $porvocalesMin=($vocalesMinus*100)/strlen($texto);
    $porvocalesMay=($vocalesMayus*100)/strlen($texto);

    $porConso=($consonantes*100)/strlen($texto);
    $porconsoMin=($consonantesMinus*100)/strlen($texto);
    $porconsoMay=($consonantesMayus*100)/strlen($texto);


    $porSignos=($signos*100)/strlen($texto);
    $PorEspacios=($espacios*100)/strlen($texto);
    //echo que muestra los resultados del texto analisado
   echo "<h2>Análisis del Texto</h2>";
   echo "<p>Texto Analizado: <strong>$texto</strong></p>";
   echo "<p><strong>$largo</strong></p>";
   echo "<h2>VOCALES</h2>";
   echo "<p>Vocales: <strong>$vocales</strong></p>";
   echo "<p>Porcentaje de Vocales: $PorVocales%</p>";
   echo "<p>Vocales: <strong>$vocales</strong> (Mayúsculas: $vocalesMayus, Minúsculas: $vocalesMinus)</p>";
   echo "<p>Porcentaje de Vocales Minúsculas: $porvocalesMin%</p>";
   echo "<p>Porcentaje de Vocales Mayúsculas: $porvocalesMay%</p>";

   echo "<h2>CONSONANTES</h2>";
   echo "<p>Consonantes: <strong>$consonantes</strong></p>";
   echo "<p>Porcentaje de Consonantes: $porConso%</p>";
   echo "<p>Consonantes: <strong>$consonantes</strong> (Mayúsculas: $consonantesMayus, Minúsculas: $consonantesMinus)</p>";
   echo "<p>Porcentaje de Consonantes Minúsculas: $porconsoMin%</p>";
   echo "<p>Porcentaje de Consonantes Mayúsculas: $porconsoMay%</p>";
   
   echo "<h2>SIGNOS</h2>";
   echo "<p>Signos de Puntuación: <strong>$signos</strong></p>";
   echo "<p>Porcentaje de Signos de Puntuación: $porSignos%</p>";

   echo "<h2>ESPACIOS</h2>";
   echo "<p>Espacios: <strong>$espacios</strong></p>";
   echo "<p>Porcentaje de Espacios: $PorEspacios%</p>";

 ?>
 

</body>
</html>