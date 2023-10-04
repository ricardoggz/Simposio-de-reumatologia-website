<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept, Authorization");
header("Access-Control-Allow-Credentials: true");
header("Access-Control-Max-Age: 3600");

$servername = "mysql-courses-database.alwaysdata.net";
$username = "297416_cursos";
$password = "Anotherbrickinthewall_10";
$database = "courses-database_reumatologia";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Conexión fallida: " . mysqli_connect_error());
}

// Conectar a la base de datos (utiliza el mismo código de conexión que en el paso 1)

// Consulta SQL para obtener los datos de la tabla
$sql = "SELECT * FROM estudiantes";
$result = $conn->query($sql);

$data = array(); // Arreglo para almacenar los datos

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

// Convertir los datos a formato JSON
$json_data = json_encode($data);

// Imprimir los datos JSON
echo $json_data;

// Cerrar la conexión a la base de datos (utiliza el mismo código de cierre que en el paso 1)
?>
