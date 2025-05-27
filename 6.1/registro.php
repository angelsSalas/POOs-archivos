<?php
// registro.php
// Verificamos que se haya enviado un nombre por POST
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["nombre"])) {
    $nombre = trim($_POST["nombre"]);
// Validamos que el nombre no esté vacío
    if ($nombre !== "") {
        $nombreArchivo = "asistentes.txt";
//try-catch para manejar errores al abrir el archivo
        try {
            // Abrimos el archivo en modo 'a' para no sobrescribir
            $RArchivo = fopen($nombreArchivo, "a");

            if (!$RArchivo) {
                throw new Exception("No se pudo abrir el archivo.");
            }

            // Escribimos el nombre con un salto de línea
            fwrite($RArchivo, $nombre . PHP_EOL);
            fclose($RArchivo);

            echo "Nombre guardado exitosamente.";
        } catch (Exception $e) {
            echo "Ocurrió un error: " . $e->getMessage();
        }
    } else {
        echo "El nombre no puede estar vacío.";
    }
} else {
    echo "Acceso no válido.";
}
?>
