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

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    // Consulta SQL para verificar las credenciales del usuario
    $sql = "SELECT * FROM estudiantes WHERE correo = '$correo' AND contrasena='$contrasena'";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        header("Location: ../simposio-internacional-reumatologia-pediatrica.html"); // Redirige a la página de inicio después del inicio de sesión
        exit();
    } else {
        echo "Usuario no encontrado.";
        echo "<br />";
        echo "<a href='../ingresar.html'>Volver</a>";
    }
}
mysqli_close($conn);
?>