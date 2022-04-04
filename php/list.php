<!DOCTYPE html>
<?php 

include('config.php');

$query = "SELECT * FROM pozo";

$result = mysqli_query($conn, $query);
$i = 0;
if(mysqli_num_rows($result) > 0) {
    echo "
    <table border='1' id='dTable'>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Presión</th>
        <th>Tiempo de medición</th>
        <th>Eliminar</th>
        <th>Ver</th>
    </tr>
</table>
    
    ";
    while($row = mysqli_fetch_assoc($result)) {

        echo "

        
        
        <form action='erase.php' method='get'>
            <td><input type='text' value='$row[id]' name='id' readonly></td>
            <td><input type='text' name='name' value='$row[nombre]' readonly></td>
            <td><input type='text' name='presion' value='$row[presion]' id='presion$i' readonly>psi</td>
            <td><input type='text' name='time' value='$row[tiempo]' id='tiempo$i' readonly></td>
            <td><input type='submit' value='eliminar'></td>
            <td><input type='radio'></td>        
        
        </form>";

        
        
        // echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"] . " - Presion: " . $row["presion"].  "psi<br>";
        $i++;
    }
} else {
    echo "0 results";
}


?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<a href="../add.html">Añadir pozo</a>
<a href="../index.html">Inicio</a>

<canvas id="graphics" style="width: 100%; max-width: 700ṕx;"></canvas>
<script src="../node_modules/chart.js/dist/chart.js">

</script>
<script src="../js/script.js"></script>
</body>
</html>