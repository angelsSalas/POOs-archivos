<?php
//Arreglo indexado numeros
$misNumeros = array();
//Llenar el arreglo con 15 numeros
for ($i = 0; $i < 15; $i++) {
    $misNumeros[$i] = rand(1, 100);
}
//mostrar el arreglo
//con print_r
echo "Arreglo con print_r: ", "<br>";
print_r($misNumeros);
ECHO "<br>";
//con foreach
echo "Arreglo con foreach: ", "<br>";
foreach ($misNumeros as $numero) {
    echo $numero . " ";
}
ECHO "<br>";
echo "Arreglo con for: ", "<br>";
//con for
for ($i = 0; $i < count($misNumeros); $i++) {
    echo $misNumeros[$i] . " "; 
}
//suma de los numeros
function suma($misNumeros) {
    $suma = 0;
    foreach ($misNumeros as $numero) {
        $suma += $numero;
    }
    return $suma;
}

//suma de los valores indices pares
function suma_pares(array $numeros): int {
$suma = 0;
for ($i = 0; $i < count($numeros); $i += 2) {
$suma += $numeros[$i];
}
return $suma;
}
//suma de los valores indices impares
function suma_impares(array $numeros): int {
$suma = 0;
for ($i = 1; $i < count($numeros); $i += 2) {
$suma += $numeros[$i];
}
return $suma;
}
//mostrar la suma de los numeros
ECHO "<br>";
echo "Suma total: " . suma($misNumeros) . "<br>";
//mostrar la suma de los numeros pares
echo "Suma de los numeros pares: " . suma_pares($misNumeros) . "<br>";
//mostrar la suma de los numeros impares
echo "Suma de los numeros impares: " . suma_impares($misNumeros) . "<br>";

