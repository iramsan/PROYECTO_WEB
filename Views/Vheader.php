<?php require_once('./Conf/Db_conex.php'); ?>
<header class="header">
    <div class="searchBox dflex">
        <div class="searchBox_2 dflex">
            <input onkeyup="buscar_ahora($('#buscar_1').val());" type="text" class="search" id="buscar_1" name="buscar_1" placeholder="Buscar..." >
            <div class="results">
                <div class="">
                    <div id="datos_buscador" class=""></div>
                </div>
            </div>
        </div>
    </div>
    <div class="dflex gap off_1">
        <img src="./img/iconMenu.png" alt="iconMenu" class="icon BMopen">
        <img src="./img/iconSearch.png" alt="iconSearch" class="icon BsearchM">
    </div>
    <div class="dflex gap">
        <img src="./img/iconLogo.png" alt="iconLogo" class=" icon">
        <a href="./index.php" class="a tittle">Kyoshi</a>
    </div>
    <img src="./img/iconShop.png" alt="iconShopCar" class="icon off_1">
    <nav class="off gap">
        <ul class="ul dflex gap">
            <img src="./img/iconSearch.png" alt="iconSearch" class="icon Bsearch">
            <li><a href="" class="a">Recursos</a></li>
            <li><a href="" class="a">Suscripciones</a></li>
            <li class="dflex">
                <a href="" class="a">
                <img src="./img/iconShop.png" alt="iconShopcar" class="icon">
                <a href="" class="a">Tienda</a></a></li>
        </ul>
        <a href="#" id="Bttn_login" class="a abox">Iniciar Sesión</a>
        <a href="#" class="a abox">Registrarte</a>
    </nav>
</header>