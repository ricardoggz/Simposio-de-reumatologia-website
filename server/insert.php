<?php
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
$lugar_procedencia= $_POST["lugar_procedencia"];
$pertenece_institucion_publica = $_POST["pertenece_institucion_publica"];
$institucion_publica= $_POST["institucion_publica"];
$numero_certificacion= $_POST["numero_certificacion"];
$es_dermatologo= $_POST["es_dermatologo"];
$especialidad = $_POST["especialidad"];
$fecha_registro;

$sql = "INSERT INTO estudiantes(
    nombre,
    correo,
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
    echo "Los datos se han insertado correctamente en la base de datos.";
} else {
    echo "Error al insertar datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?>
