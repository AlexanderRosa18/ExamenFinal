<!DOCTYPE html>
<html>
<head>
    <title>Base de datos</title>
</head>

<body>
    <h1>Base de datos</h1>

    <?php
    // Conexión a la base de datos
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "Final_0907-23-14346";

    $conn = new mysqli($servername, $username, $password, $database);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }

    // Mostrar los datos de la tabla
    $sql = "SELECT * FROM dato";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table><tr><th>codigo</th><th>nombre</th><th>precio</th><th>existencia</th></tr>";

        while ($row = $result->fetch_assoc()) {
            echo "<tr><td>" . $row["codigo"] . "</td><td>" . $row["nombre"] . "</td><td>" . $row["precio"] . ["existencia"] . "</td></tr>";
        }

        echo "</table>";
    }

    ?>  
    </body>
    </html>