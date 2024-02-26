<!DOCTYPE html>
<html>
<head>
    <title>Formulario de Inserción de Roles</title>
</head>
<body>

<h2>Insertar Nuevo Rol</h2>

<form action="salud.php" method="post">
    Tipo de Usuario:<br>
    <input type="number" name="valor"><br>
    
    
    <input type="submit" value="Insertar Rol">
</form>

<?php
// Archivo de conexión a la base de datos
include '../conexion/db.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo 'tp_usuarios' del formulario
    $valor = $_POST['valor'];
   

    // Preparar la consulta SQL para insertar un nuevo registro en la tabla 'roles'
     $sql = "INSERT INTO salud (valor) VALUES ($valor)";

    // Ejecutar la consulta SQL
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo valor de salud cargado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
