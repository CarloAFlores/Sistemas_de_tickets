<?php
//Aca es onde nos coinectamos a la base de datos
$db = mysqli_connect('localhost', 'root', 'Linux3529600**', 'Tickets');

//En caso de no poderse conectar nos saltaran estos errores
if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
