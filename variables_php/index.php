<!DOCTYPE HTML>
<html lang="es">
<head>
   <meta charset = "UTF-8">
   <meta name="viewpoint" content="width=device-width, initial-scale=1.0">
   <title>Practica de variables y constantes en PHP</title>
</head>
<body>
   <!-- angel adan salas cabello
      242310285
      programacion orientada a objetos
   -->
   <h1>Uso de variables y constantes en php</h1>
   <?php
       //definicion de variables
       $nombre="Angel Adan salas Cabello";
       $edad=19;
       $ciudad="Gomez Palacio";
       $precioproducto=170;
       const IVA = 0.16;


       //definicon de una constante
       const EMPRESA="tech solutions S:A";
       $valorIVA=IVA*$precioproducto;
       $precioConIVA = ($precioproducto + $valorIVA);

       //mostrando informascion en la pagina
       echo"<p>Nombre del usuario; <strong>$nombre</strong></p>";
       echo"<p>Edad: <strong>$edad años </strong></p>";
       echo"<p>Ubicacion: <strong>$ciudad</strong></p>";
       echo"<p>precio del producto:<strong>$precioproducto</strong></p>";
       echo"<p>Empresa:<strong>" .EMPRESA. "</strong></p>";
       echo "<p>Precio con IVA del 16%: <strong>$" ,$precioConIVA,"</strong></p>";

   ?>
   <hr>
   <h2>Operaciones con variables</h2>
   <?php
   //operaciones metematicas con variables
   $preciocondescuento=$precioproducto+0.9;
   echo "<p>Precio con 19% de descuento:<strong>$$preciocondescuento</strong></p>";
   echo "<p>Precio con IVA del 16%: <strong>$" ,$precioConIVA, "</strong></p>";



   //cincatenacion de cadenas
   $mensaje="bienvenido ".$nombre." a ".EMPRESA.".";
   echo"<p>$mensaje</p>";
   ?>
</body>
</html>
