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
    <link rel="stylesheet" href="./css/scss.css">
    <script defer src="./js/dropAcoutn.js"></script>
</head>
<body>
    <?php require_once('./Views/VheaderAll.php'); ?>
    
    <aside class="boxUser">
            <?php
            $e = $_SESSION['e'];
            $ddd = mysqli_query($conex,"SELECT * FROM usuario WHERE Email='$e'");
            while($row = mysqli_fetch_array($ddd)){ 
                if ($row['img']!=null) { ?>
                    <img class="imgUser" src="<?php echo $row['img'] ?>" alt="">
                    <p><?php echo strtoupper($_SESSION['logeado']); ?></p>
                <?php }else{ ?>
                    <img class="imgUser" src="https://img.icons8.com/ios-glyphs/344/user--v1.png" alt="">
                <?php } } 
            ?>
            <a class="bttAcount bttAcountClose" href="./Conf/ConfLogout.php">Cerrar cuenta</a>
            <?php
            $lgd = $_SESSION['logeado'];
            if (!($lgd == "Admin")) { ?>
                <a class="bttAcount bttAcountDelete" id="deleteAcount" href="#">Borrar Cuenta</a>
            <?php } ?>
     </aside>
    
    <main class="boxUserData">

    <?php if (isset($_SESSION['logeado'])) { ?>
        
        <p>Usuario: <?php echo $_SESSION['logeado']; ?></p>
        <p>E-mail: <?php echo $_SESSION['e']; ?></p>
    <?php } ?>
    </main>

</body>
</html>