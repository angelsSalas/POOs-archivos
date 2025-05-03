<?php
 require_once 'CommunityMembers.php';
// Aquí deberías pegar el código completo de las clases (las que ya corregiste)

// Ejemplo de uso

// Creamos un estudiante
$student = new student("Juan Pérez", "juan@example.com", "2023001", "Ingeniería en Sistemas");

// Creamos un alumno (alumnus)
$alumnus = new alumnus("María López", "maria@example.com", 2018, 2022);

// Creamos un empleado
$employee = new communityEmployees("Luis García", "luis@example.com", "E123", 15000);

// Creamos un faculty
$faculty = new faculty("Ana Torres", "ana@example.com", "F456", 25000, "Facultad de Ciencias", "Matemáticas");

// Creamos un staff
$staff = new staff("Carlos Mendoza", "carlos@example.com", "S789", 12000, "Recepcionista");

// Creamos un administrador
$administrator = new administrator("Laura Gómez", "laura@example.com", "A987", 30000, "Facultad de Ciencias", "Administración", "Recursos Humanos");

// Creamos un profesor
$professor = new professor("Pedro Sánchez", "pedro@example.com", "P654", 28000, "Facultad de Ingeniería", "Informática", "Programación");

// Mostramos los datos
echo "=== Estudiante === <br>";
echo $student;
echo "<br>";
echo"<p> </p>";

echo "\n=== Alumno ===<br>";
echo $alumnus;
echo "<br>";
echo"<p> </p>";


echo "\n=== Empleado ===<br>";
echo $employee;
echo "<br>";
echo"<p> </p>";


echo "\n=== Faculty ===<br>";
echo $faculty;
echo "<br>";
echo"<p> </p>";

echo "\n=== Staff ===<br>";
echo $staff;
echo "<br>";
echo"<p> </p>";


echo "\n=== Administrador ===<br>";
echo $administrator;
echo "<br>";
echo"<p> </p>";


echo "\n=== Profesor ===<br>";
echo $professor;
