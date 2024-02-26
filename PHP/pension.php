<!DOCTYPE html>
<html>
<head>
    <title>Formulario para la insercion de datos de pension</title>
</head>
<body>

<h2>PENSION</h2>

<form action="pension.php" method="post">
    valor(%) pension:<br>
    <input type="number" name="valor"><br>
    
    
    <input type="submit" value="Insertar Rol">
</form>

<?php

include '../conexion/db.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor = $_POST['valor'];
   

     $sql = "INSERT INTO pension (valor) VALUES ($valor)";

    
    if ($conn->query($sql) === TRUE) {
        echo "Nuevo valor de salud cargado correctamente.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>

</body>
</html>
