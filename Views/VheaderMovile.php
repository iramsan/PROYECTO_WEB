<?php 
require_once('./Conf/Db_conex.php'); 
$conex = $inst->conex();
?>
<header class="header">
    <h1 class="tittle hidden2">Kyoshi</h1>
    <!-- Icons -->
    <ul class="ul_1-0 hidden">
        <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
        <li class="li_1-0" id="jsBttnsearch"><a href="#"><img id="imgChangeSearch" class="icon_1-0" src="./img/iconSearch.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="#"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
        <li class="li_1-0" id="jsBttnResour"><a href="./recursos.php"><img id="imgChangeResour" class="icon_1-0" src="./img/iconDowload.png"></a></li>
        <li class="li_1-0" id="jsBttnMenu"><a href="#"><img id="imgChangeMenu" class="icon_1-0" src="./img/iconMenu.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="./usuario.php"><img class="icon_1-0" src="./img/iconUser.png"></a></li>

    </ul>
    <nav class="dflex_1-1 hidden2">
        <ul class="dflex_1-0 ul_1-0">
        <li class="li_1-0" id="jsBttnHome"><a href="./index.php"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
            <li class="li_1-0" id="jsBttnsearchDesk"><a href="#"><img id="imgChangeSearchDesk" class="icon_1-0" src="./img/iconSearch.png"></a></li>
            <li class="li_1-0"><a href="#"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
            <li><a href="./contenido.php" class="a_1-0 hovers">Contenido</a></li>
            <li><a href="./recursos.php" class="a_1-0 hovers">Recursos</a></li>
            
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
            <a href="./registro.php" id="" class="a_1-0 a_1-1">Iniciar Sesión</a>
            <a href="./registro.php" id="" class="a_1-0 a_1-1">Registrarte</a>
            <?php } ?>
    
    </nav>
</header>
    <!-- Searcher -->
<section>
    <div class="searchBox" id="jsBoxSearch">
        <section class="searchBoxinside dflex_1-2">
            <section class="dflex_1-0">
                <input type="image" src="./img/iconSearch.png" class="icon_1-1">
                <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" id="buscar_1" name="buscar_1" placeholder="Busqueda" class="searchInput">
            </section>
            <section>
                <ul class="scrool dataSearch" id="datos_buscador"></ul>
            </section>
        </section>
    </div>
</section>