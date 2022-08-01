<?php require_once('./Conf/CofMenu.php'); ?>
<div class="">
    <nav class="menu scroolMenu" id="menu">
        <ul class="ul_1-1">
            <!-- Estrategias -->
            <li class="li_1-1"><a href="?p=estrategias" class="li_1-4 li_1-2">Estrategias</a></li>
            <li><ul class="ul_1-1">
            <li class="margin"><a href="#" class="li_1-3">Indagar en conocimientos</a></li>
                <?php while ($row = mysqli_fetch_array($menu_1)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
                <li class="margin_2" id="jsBPreguntas"><a href="#" class="li_1-2">Peguntas<img src="./img/iconArrow2.png" alt="iconArrow" class="icon_1-2"></a></li>
                <li class="margin"><a href="#" class="li_1-3">Promover la comprensión</a></li>
                <?php while ($row = mysqli_fetch_array($menu_2)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
                <li class="margin_2" id="jsBDiagrama"><a href="#" class="li_1-2">Diagramas<img src="./img/iconArrow2.png" alt="iconArrow" class="icon_1-2"></a></li>
                <li class="margin_2" id="jsBMapas"><a href="#" class="li_1-2">Mapas cognitivos<img src="./img/iconArrow2.png" alt="iconArrow" class="icon_1-2"></a></li>
                <li class="margin_2" id="jsBOtras"><a href="#" class="li_1-2">otras estrategias<img src="./img/iconArrow2.png" alt="iconArrow" class="icon_1-2"></a></li>
                <li class="margin_2"><a href="#" class="li_1-3">Grupales</a></li>
                <?php while ($row = mysqli_fetch_array($menu_3)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
            </ul></li>
            <!-- Metodologias -->
            <li class="li_1-1"><a href="?p=metodologias" class="li_1-4 li_1-2">Metodologias</a></li>
            <li><ul class="ul_1-1">
            <?php while ($row = mysqli_fetch_array($menu_4)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
            </ul></li>
        </ul>
    </nav>


    <spam class="iconBack" id="jsBBackDesk"><a href="#"><img class="icon_1-0" src="./img/iconArrow.png"></a></spam>
    <!-- Preguntas -->
    <nav class="menuCard" id="jsMenuPCard">
        <ul class="ul_1-1">
            <li class=""><a href="#" class="li_1-3">Preguntas</a></li>
            <?php while ($row = mysqli_fetch_array($menu_p)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <!-- Diagramas -->
    <nav class="menuCard" id="jsMenuDCard">
        <ul class="ul_1-1">
            <li class=""><a href="#" class="li_1-3">Diagramas</a></li>
            <?php while ($row = mysqli_fetch_array($menu_d)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <!-- Mapas -->
    <nav class="menuCard" id="jsMenuMCard">
        <ul class="ul_1-1">
            <li class=""><a href="#" class="li_1-3">Mapas Cognitivos</a></li>
            <?php while ($row = mysqli_fetch_array($menu_m)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <!-- Otras -->
    <nav class="menuCard" id="jsMenuOCard">
        <ul class="ul_1-1">
            <li class=""><a href="#" class="li_1-3">Otras Estrategias</a></li>
            <?php while ($row = mysqli_fetch_array($menu_o)) { ?>
                    <li class="margin_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a_1-0"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
</div>