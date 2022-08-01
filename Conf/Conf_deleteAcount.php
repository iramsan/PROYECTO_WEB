<?php
session_start();
require_once('Db_conexConf.php');
    $id = $_SESSION['idUser'];
    $q = mysqli_query($conex,"DELETE FROM usuario WHERE Cod_usuario='$id'");
    unset($_SESSION['logeado']);
    session_destroy();
    header("Location: ../registro.php");
?>