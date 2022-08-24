<?php 
require_once('./Conf/Db_conex.php'); 
$conex = $inst->conex();
?>
<header class="header dis_jus">
    <h1 class="tittle">Kyoshi</h1>
    <ul class="ul_1-0 hidden dflex_1-0 #mostrar">
        <input type="checkbox" id="evento-click">
            <label for="evento-click" class="dis_d_flex_1"><img src="https://img.icons8.com/sf-black-filled/344/expand-arrow.png" alt="iconShopcar" class="icon_1-0"><span>Navegar</span></label>
            <li class="li_1-0" id="jsBttnsearch"><a href="#"><img id="imgChangeSearch" class="icon_1-0" src="./img/iconSearch.png"></a></li>
            <li class="li_1-0" id="jsBttnMenu"><a href="#"><img id="imgChangeMenu" class="icon_1-0" src="./img/iconMenu.png"></a></li>
            
        <li class="ocultar"><div class="navegar dis_d_flex bt ">
                <a href="./index.php" class="dis_a" id="jsBttnHome">Home</a>
                <a href="./contenido.php" class="dis_a">Contenido</a>
                <a href="./recursos.php" class="dis_a" id="jsBttnResour">Recursos</a>
                <a href="./tienda.php" class="dis_a" id="jsBttnShop">Tienda</a>
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
                    <a href="./registro.php" id="" class="a_1-0 a_1-1 bg_color_1 color_w">Iniciar Sesión</a>
                    <?php } ?>
                </div>
            </div>
        </li>
    </ul>


    <nav class="dflex_1-1 hidden2">
        <ul class="dflex_1-0 ul_1-0">
        <!-- <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li> -->
            <li class="li_1-0" id="jsBttnsearchDesk"><a href="#"><img id="imgChangeSearchDesk" class="icon_1-0" src="./img/iconSearch.png"></a></li>
            <!-- <li class="li_1-0"><a href="./tienda.php"><img class="icon_1-0" src="./img/iconShop.png"></a></li> -->
            <li><a href="./index.php" class="a_1-0 hovers">Home</a></li>
            <li><a href="./contenido.php" class="a_1-0 hovers">Contenido</a></li>
            <li><a href="./recursos.php" class="a_1-0 hovers">Recursos</a></li>
            <li><a href="./tienda.php" class="a_1-0 hovers">Tienda</a></li>
            
            <!-- <li class="dflex_1-1">
                <a href="" class=""><img src="./img/iconShop.png" alt="iconShopcar" class="icon_1-0">
                <a href="" class="a_1-0">Tienda</a></a>
            </li> -->
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
            <a href="./registro.php" id="" class="a_1-0 a_1-1 bg_color_1 color_w">Iniciar Sesión</a>
            <?php } ?>
    
    </nav>
</header>
    <!-- Searcher -->
<section>
    <div class="searchBox" id="jsBoxSearch">
        <section class="searchBoxinside dflex_1-2">
            <section class="dflex_1-0">
                <input type="image" src="./img/iconSearch.png" class="icon_1-1">
                <input  onkeyup="buscar_ahora($('#buscar_1').val());" type="text" id="buscar_1" name="buscar_1" placeholder="Busqueda" class="searchInput">
            </section>
            <section>
                <ul class="scrool dataSearch" id="datos_buscador"></ul>
            </section>
        </section>
    </div>
</section>