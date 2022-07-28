<?php require_once('./Conf/Db_conex.php'); ?>
<header class="header">
    <h1 class="tittle hidden2">Kyoshi</h1>
    <!-- Icons -->
    <ul class="ul_1-0 hidden">
        <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="#"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
        <li class="li_1-0" id="jsBttnResour"><a href="./main.php"><img id="imgChangeResour" class="icon_1-0" src="./img/iconCont.png"></a></li>
        <li class="li_1-0" id="jsBttnResour"><a href="./recursos.php"><img id="imgChangeResour" class="icon_1-0" src="./img/iconDowload.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="./usuario.php"><img class="icon_1-0" src="./img/iconUser.png"></a></li>

    </ul>
    <nav class="dflex_1-1 hidden2">
        <ul class="dflex_1-0 ul_1-0">
            <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
            <li class="li_1-0"><a href="#"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
            <li><a href="./main.php" class="a_1-0 hovers">Contenido</a></li>
            <li><a href="./recursos.php" class="a_1-0 hovers">Recursos</a></li>
        </ul>

        <?php if (isset($_SESSION['logeado'])) { ?>
            <a class="a_1-0 a_1-1" href="./usuario.php"><?php echo $_SESSION['logeado'] ?></a>
        <?php }else{ ?>
            <a href="./registro.php" id="" class="a_1-0 a_1-1">Iniciar Sesión</a>
            <a href="./registro.php" id="" class="a_1-0 a_1-1">Registrarte</a>
            <?php } ?>
        
    </nav>
</header>