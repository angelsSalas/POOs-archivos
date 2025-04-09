<?phP
echo"Operaciones: ";
echo "<br>";
// Incluir la clase Operaciones
require_once 'operaciones.php';
// Crear un objeto de la clase Operaciones
$operacion = new Operaciones();
// Llamar al método sin parámetros
echo "Suma sin parámetros (usando propiedades de la clase): " . $operacion->sumarSinParametros() .
"<br>";
//reto
echo "multiplica sin parámetros (usando propiedades de la clase): " . $operacion->multiplicarSinParametros() .
"<br>";
// Llamar al método con parámetros
echo "Suma con parámetros (5 + 7): " . $operacion->sumarConParametros(5, b: 7) .
"<br>";
//reto se llama el metodo y se le asignan los valores
echo "multiplicacion con parámetros (5 * 7): " . $operacion->multiplicarConParametros(5, 7) .
"<br>";
?>