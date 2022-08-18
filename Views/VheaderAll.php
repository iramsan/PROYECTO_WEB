<?php require_once('./Conf/Db_conex.php'); 
$conex = $inst->conex();
?>

<header class="header">
    <h1 class="tittle hidden2">Kyoshi</h1>
    <!-- Icons -->
    <ul class="ul_1-0 hidden">
        <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="./usuario.php"><img class="icon_1-0" src="./img/iconUser.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="./tienda.php"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
        <li class="li_1-0" id="jsBttnResour"><a href="./contenido.php"><img id="imgChangeResour" class="icon_1-0" src="./img/iconCont.png"></a></li>
        <li class="li_1-0" id="jsBttnResour"><a href="./recursos.php"><img id="imgChangeResour" class="icon_1-0" src="./img/iconDowload.png"></a></li>

    </ul>
    <nav class="dflex_1-1 hidden2">
        <ul class="dflex_1-0 ul_1-0">
            <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
            <li class="li_1-0"><a href="./tienda.php"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
            <li><a href="./contenido.php" class="a_1-0 hovers">Contenido</a></li>
            <li><a href="./recursos.php" class="a_1-0 hovers">Recursos</a></li>
        </ul>

        <?php if (isset($_SESSION['logeado'])) { ?>        
            <?php
            $id = $_SESSION['idUser'];
            $ddd = mysqli_query($conex,"SELECT * FROM usuario WHERE Cod_usuario='$id'");
            while($row = mysqli_fetch_array($ddd)){ 
                if ($row['img']!=null) { ?>
                    <a href="./usuario.php" class="li_1-0"><img class="icon_1-0" src="<?php echo $row['img'] ?>"></a>
                <?php }else{ ?>
                    <img class="imgUser" src="https://img.icons8.com/ios-glyphs/344/user--v1.png" alt="">
                <?php } } 
            ?>
        <?php }else{ ?>
            <a href="./registro.php" id="" class="a_1-0 a_1-1">Iniciar Sesión</a>
            <a href="./registro.php" id="" class="a_1-0 a_1-1">Registrarte</a>
            <?php } ?>
        
    </nav>
</header>