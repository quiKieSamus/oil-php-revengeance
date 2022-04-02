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

if(isset($name) && isset($pressure)) {
    $result = mysqli_query($conn, $query);

    echo "Añadido satisfactoriamente a la base de datos";
    
    echo '<a href="list.php">Ver pozos</a>';

} else {
    echo "papi dejate de mariqueras";
}




mysqli_close($conn);
?>