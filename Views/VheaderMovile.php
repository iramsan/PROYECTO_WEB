<?php require_once('./Conf/Db_conex.php'); ?>
<header class="header">
    <h1 class="tittle">Kyoshi</h1>
    <!-- Icons -->
    <ul class="ul_1-0">
        <li class="li_1-0" id="jsBttnHome"><a href="#"><img class="icon_1-0" src="./img/iconHome.png"></a></li>
        <li class="li_1-0" id="jsBttnsearch"><a href="#"><img id="imgChangeSearch" class="icon_1-0" src="./img/iconSearch.png"></a></li>
        <li class="li_1-0" id="jsBttnShop"><a href="#"><img class="icon_1-0" src="./img/iconShop.png"></a></li>
        <li class="li_1-0" id="jsBttnMenu"><a href="#"><img id="imgChangeMenu" class="icon_1-0" src="./img/iconMenu.png"></a></li>
    </ul>
    <nav class="dflex_1-1">
        <ul class="dflex_1-0 ul_1-0">
            <li class="li_1-0" id="jsBttnsearchDesk"><a href="#"><img id="imgChangeSearch" class="icon_1-0" src="./img/iconSearch.png"></a></li>
            <li><a href="./recursos.php" class="a_1-0">Recursos</a></li>
            <li class="dflex_1-1">
                <a href="" class=""><img src="./img/iconShop.png" alt="iconShopcar" class="icon_1-0">
                <a href="" class="a_1-0">Tienda</a></a>
            </li>
        </ul>
        <a href="#" id="" class="a_1-0 a_1-1">Iniciar Sesión</a>
        <a href="#" id="" class="a_1-0 a_1-1">Registrarte</a>
    </nav>
</header>
    <!-- Searcher -->
<section>
    <div class="searchBox" id="jsBoxSearch">
        <section class=" dflex_1-2">
            <section class="dflex_1-0">
                <input type="image" src="./img/iconSearch.png" class="icon_1-1">
                <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" id="buscar_1" name="buscar_1" placeholder="Busqueda" class="searchInput">
            </section>
            <spam class="scrool dataSearch" id="datos_buscador"></spam>
        </section>
    </div>
</section>