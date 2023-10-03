<?php
session_start();

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

$nombre = $_POST["nombre"];
$correo = $_POST["correo"];
$contrasena = $_POST["contrasena"];
$lugar_procedencia= $_POST["lugar_procedencia"];
$pertenece_institucion_publica = $_POST["pertenece_institucion_publica"];
$institucion_publica= $_POST["institucion_publica"];
$numero_certificacion= $_POST["numero_certificacion"];
$es_dermatologo= $_POST["es_dermatologo"];
$especialidad = $_POST["especialidad"];
$fecha_registro = date("Y-m-d");

$sql = "INSERT INTO estudiantes(
    nombre,
    correo,
    contrasena,
    lugar_procedencia,
    pertenece_institucion_publica,
    institucion_publica,
    numero_certificacion,
    es_dermatologo,
    especialidad,
    fecha_registro
    )
VALUES(
    '$nombre',
    '$correo',
    '$contrasena',
    '$lugar_procedencia',
    '$pertenece_institucion_publica',
    '$institucion_publica',
    '$numero_certificacion',
    '$es_dermatologo',
    '$especialidad',
    '$fecha_registro'
)
";

if (mysqli_query($conn, $sql)) {
    $_SESSION['correo'] = $correo;
    $_SESSION['contrasena'] = $contrasena;
    header("Location: ../simposio-internacional-reumatologia-pediatrica.php");
} else {
    echo "Error al insertar datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
