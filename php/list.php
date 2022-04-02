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
                <th>Tiempo de medición</th>
                <th>Eliminar</th>
                <th>Ver</th>
            </tr>

            <tr>
                <form action='erase.php' method='get'>
                    <td><input type='text' value='$row[id]' name='id' readonly></td>
                    
                    <td><input type='text' name='name' value='$row[nombre]' readonly></td>
                    
                    <td><input type='text' name='presion' value='$row[presion]' readonly>psi</td>

                    <td><input type='text' name='time' value='$row[tiempo]' readonly></td>
                    <td><input type='submit' value='eliminar'></td>
                    
                </form>
                <td><input type='radio'></td>
            </tr>
        
        </table>";
        
        // echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"] . " - Presion: " . $row["presion"].  "psi<br>";
    }
} else {
    echo "0 results";
}


?>

<a href="../add.html">Añadir pozo</a>
<a href="../index.html">Inicio</a>