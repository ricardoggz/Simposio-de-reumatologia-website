<?php
session_start();

if (!isset($_SESSION['correo']) && !isset($_SESSION['contrasena'])) {
    header('Location: ../ingresar.html');
    exit();
}else{
    header('Location: ../simposio-internacional-reumatologia-pediatrica.php');
    exit();
}
?>
