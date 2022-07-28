<?php session_start(); ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/officialCss.css">
</head>
<body>
    <?php require_once('./Views/VheaderAll.php'); ?>
<br><br><br><br><br>

<p>Nombre de usuario: <?php echo $_SESSION['logeado']; ?></p>
<p>Nombre de E-mail: <?php echo $_SESSION['e']; ?></p>
<p>Nombre de Contraseña: <?php echo $_SESSION['p']; ?></p>

<a href="./Conf/ConfLogout.php">Cerrar cuenta</a>
</body>
</html>