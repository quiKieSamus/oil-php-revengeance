<?php 

include('config.php');

$query = "SELECT * FROM pozo";

$result = mysqli_query($conn, $query);

if(mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "
        <table border='1'>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Presión</th>
                <th>Eliminar</th>
                <th>Ver</th>
            </tr>
            <tr>
            <td>$row[id]</td>
            <td>$row[nombre]</td>
            <td>$row[presion]psi</td>
            <td><img src='../img/download.png' width='10' height='10'></td>
            <td><input type='radio'></td>
            </tr>
        
        </table>";
        
        // echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"] . " - Presion: " . $row["presion"].  "psi<br>";
    }
} else {
    echo "0 results";
}



?>