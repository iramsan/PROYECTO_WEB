<?php
session_start();
unset($_SESSION['logeado']); //ELIMINAMOS LA VARIABLE
session_destroy();

header("Location: ../registro.php")
?>