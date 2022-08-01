<?php 
require_once('./Conf/Db_conexConf.php');
session_start(); 

if (!isset($_SESSION['logeado'])) {
    header("Location: registro.php");
}



?>
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
    
    <aside class="asideResour">
        <ul class="ul_1-1">
        <li class="li_1-1"><a href="#" class="li_1-4">Cuenta</a></li>
        <div class="sttUserAcount">
            
            <!-- img user -->
            <?php
            $e = $_SESSION['e'];
            $ddd = mysqli_query($conex,"SELECT * FROM usuario WHERE Email='$e'");
            while($row = mysqli_fetch_array($ddd)){ 
                if ($row['img']!=null) { ?>
                    <img class="imgResour" src="<?php echo $row['img'] ?>" alt="">
                <?php }else{ ?>
                    <img class="imgResour" src="https://img.icons8.com/ios-glyphs/344/user--v1.png" alt="">
                <?php } } 
            ?>
            
            <a href="./Conf/ConfLogout.php">Cerrar cuenta</a>
            <a href="./Conf/Conf_deleteAcount.php">Borrar Cuenta</a>
        </div>
     </aside>
    
    <main class="cont">

    <?php if (isset($_SESSION['logeado'])) { ?>
        <p>Nombre de usuario: <?php echo $_SESSION['logeado']; ?></p>
        <p>Nombre de E-mail: <?php echo $_SESSION['e']; ?></p>
        <p>Nombre de Contraseña: <?php echo $_SESSION['p']; ?></p>
        
    <?php } ?>
    </main>

</body>
</html>