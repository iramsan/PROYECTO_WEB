<?php require_once('./Conf/Db_conex.php'); 
$conex = $inst->conex();
?>

<header class="header dis_jus">
    <h1 class="tittle">Kyoshi</h1>
    <!-- Icons -->
    <ul class="ul_1-0 hidden dflex_1-0 #mostrar">
        <input type="checkbox" id="evento-click">

        <label for="evento-click" class="dis_d_flex_1"><img src="https://img.icons8.com/sf-black-filled/344/expand-arrow.png" alt="iconShopcar" class="icon_1-0"><span>Navegar</span></label>

        <!-- <li class="li_1-0" id="jsBttnShop"><a href="./usuario.php"><img class="icon_1-0" src="./img/iconUser.png"></a></li> -->
        <li class="ocultar"><div class="navegar dis_d_flex bt ">
                <a href="./index.php" class="dis_a">Home</a>
                <a href="./contenido.php" class="dis_a">Contenido</a>
                <a href="./recursos.php" class="dis_a">Recursos</a>
                <a href="./tienda.php" class="dis_a">Tienda</a>
                <div class="bt dis_d_flex_1 mgtop gap">
                    <?php if (isset($_SESSION['logeado'])) { ?>        
                    <?php
                    $id = $_SESSION['idUser'];
                    $ddd = mysqli_query($conex,"SELECT * FROM usuario WHERE Cod_usuario='$id'");
                    while($row = mysqli_fetch_array($ddd)){ 
                        if ($row['img']!=null) { ?>
                            <a href="./usuario.php" class="li_1-0"><img class="icon_1-0" src="<?php echo $row['img'] ?>"></a>
                            <a class="bttAcount bttAcountClose mg_none" href="./Conf/ConfLogout.php">Cerrar cuenta</a>
                            <?php }else{ ?>
                            <img class="imgUser" src="https://img.icons8.com/ios-glyphs/344/user--v1.png" alt="">
                        <?php } } ?>
                    <?php }else{ ?>
                    <a href="./registro.php" id="" class="a_1-0 a_1-1 bg_color_1 color_w color_blanco">Iniciar Sesión</a>
                    <?php } ?>
                </div>
            </div>
        </li>
    </ul>


    <nav class="dflex_1-1 hidden2">
        <ul class="dflex_1-0 ul_1-0">
            <!-- <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li> -->
            <!-- <li class="li_1-0"><a href="./tienda.php"><img class="icon_1-0" src="./img/iconShop.png"></a></li> -->
            <li><a href="./index.php" class="a_1-0 hovers">Home</a></li>
            <li><a href="./contenido.php" class="a_1-0 hovers">Contenido</a></li>
            <li><a href="./recursos.php" class="a_1-0 hovers">Recursos</a></li>
            <li><a href="./tienda.php" class="a_1-0 hovers">Tienda</a></li>
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
                <?php } } ?>
        <?php }else{ ?>
            <a href="./registro.php" id="" class="a_1-0 a_1-1 bg_color_1 color_w">Iniciar Sesión</a>
            <!-- <a href="./registro.php" id="" class="a_1-0 a_1-1 bg_color_1 color_w">Registrarte</a> -->
            <?php } ?>
        
    </nav>
</header>