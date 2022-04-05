<?php 
echo "
<!DOCTYPE html>
<html lang='es'>
<head>
    <meta charset='UTF-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='../css/list.css' type='text/css'>
    <title>Pozos</title>
</head>


";

include('config.php');

$query = "SELECT * FROM pozo";

$result = mysqli_query($conn, $query);
$i = 0;
if(mysqli_num_rows($result) > 0) {

    while($row = mysqli_fetch_assoc($result)) {

        echo "
        
        <form action='erase.php' method='get'>
            <div class='data'>
                <label for='id'>ID</label>
                <input type='text' value='$row[id]' class='field' name='id' readonly>

                <label for='name'>Nombre</label>
                <input type='text' name='name' value='$row[nombre]' class='field'readonly>

                <label for='presion'>Presión</label>
                <input type='text' name='presion' value='$row[presion]' class='field pressure' id='presion$i' readonly>psi

                <label for='time'>Tiempo</label>
                <input type='text' name='time' value='$row[tiempo]' class='field pressure' id='tiempo$i' readonly>

                <input type='submit' value='eliminar' class='deleteBtn'>  
                <!--<input type='radio'>-->  
            </div>          
        
        </form>";

        
        
        // echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"] . " - Presion: " . $row["presion"].  "psi<br>";
        $i++;
    }
} else {
    echo "0 results";
}


?>


<body>
    <div class="linkContainer">
        <a href="../index.html" class="link">Inicio</a>
        <a href="../add.html" class="link">Añadir pozo</a>
    </div>

    <canvas id="graphics" style="width: 100%; max-width: 700px;"></canvas>
    <script src="../node_modules/chart.js/dist/chart.js"></script>
    <script src="../js/script.js"></script>
</body>
</html>