<?php
require_once 'TipoPokemon.php';
//iniciar instancia
$Pokemon1 = new SportsPokemons('Pikachu', 10, 4, 2, 3);
$Pokemon2 = new SportsPokemons('Charmander', 15, 4, 3, 4);

$Pokemon3 = new HomePokemons('snorlax', 20, 4, 5, 2);
$Pokemon4 = new HomePokemons('Squirtle', 25, 4, 6, 3);

$Pokemon5 = new SeaPokemons('vaporeon', 12, 4, 2, 3);
$Pokemon6 = new SeaPokemons('lapras', 18, 4, 3, 4);

$Pokemon7= new cruisePokemons('pelican', 12, 4, 2, 3);
$Pokemon8 = new cruisePokemons('slowbro', 18, 4, 3, 4);

//imprimir
echo "<h1>Pokemon</h1>";
echo "<h2>Pokemon Deportivo</h2>";
echo $Pokemon1->ToString(),"<br>";
echo $Pokemon2->ToString(),"<br>";
echo "<h2>Pokemon de casa</h2>";
echo $Pokemon3->ToString(),"<br>";
echo $Pokemon4->ToString(),"<br>";
echo "<h2>Pokemon de mar</h2>";
echo $Pokemon5->ToString(),"<br>";
echo $Pokemon6->ToString(),"<br>";
echo "<h2>Pokemon de crucero</h2>";
echo $Pokemon7->ToString(),"<br>";
echo $Pokemon8->ToString(),"<br>";


?>