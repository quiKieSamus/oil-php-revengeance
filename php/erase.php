<?php 
include('config.php');
$id = $_GET['id'];

echo "Pozo eliminado";

$query = "DELETE FROM pozo WHERE id='$id'";

$result = mysqli_query($conn, $query);


mysqli_close($conn);


?>

<a href="list.php">Ver lista de pozos</a>
<a href="add.php">Añadir pozo</a>