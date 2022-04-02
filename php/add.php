<?php 
include("config.php");


$name = $_GET['name'];
$pressure = $_GET['pressure'];


/*if(!$conn) {
    echo("Conexión fallida " . mysqli_connect_error());
} else {
    echo "conexion exitosa";
}*/

$query = "INSERT INTO pozo (nombre, presion) VALUES ('$name', '$pressure')";

$result = mysqli_query($conn, $query);

echo '<a href="list.php">Ver pozos</a>';

mysqli_close($conn);
?>