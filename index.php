<?php
// Configuración de la base de datos
$servername = "db"; // Nombre del host (como aparece en docker-compose.yml)
$username = "user";
$password = "secret";
$database = "db";

// Intentar conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
echo "Conexión exitosa a la base de datos<br>";

// Ejemplo de consulta
$sql = "SELECT 'Hola, mundo!' AS mensaje";
$result = $conn->query($sql);

// Mostrar resultados
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Mensaje: " . $row["mensaje"];
    }
} else {
    echo "No se encontraron resultados.";
}

// Cerrar conexión
$conn->close();
?>
