<?php require_once('./Conf/CofMenu.php'); ?>
<div class="">
    <nav class="menu GMopen">
        <ul class="ul scrool">
            <!-- Estrategias -->
            <li class="li"><a href="#" class="a color">Estrategias</a></li>
            <li><ul class="ul">
            <li class="li_2"><a href="#" class="a color1">Indagar en conocimientos</a></li>
                <?php while ($row = mysqli_fetch_array($menu_1)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
                <li class=""><a href="#" class="a gap li_2 BPopen"><p>Peguntas</p><img src="./img/iconArrow2.png" alt="iconArrow" class="iconSmall"></a></li>
                <li class="li_2"><a href="#" class="a color1">Promover la comprensión</a></li>
                <?php while ($row = mysqli_fetch_array($menu_2)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
                <li class=""><a href="#" class="a gap li_2 BDopen"><p>Diagramas</p><img src="./img/iconArrow2.png" alt="iconArrow" class="iconSmall"></a></li>
                <li class=""><a href="#" class="a gap li_2 BMaopen"><p>Mapas cognitivos</p><img src="./img/iconArrow2.png" alt="iconArrow" class="iconSmall"></a></li>
                <li class=""><a href="#" class="a gap li_2 BOopen"><p>otras estrategias</p><img src="./img/iconArrow2.png" alt="iconArrow" class="iconSmall"></a></li>
                <li class=""><a href="#" class="a color1">Grupales</a></li>
                <?php while ($row = mysqli_fetch_array($menu_3)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
            </ul></li>
            <!-- Metodologias -->
            <li class="li"><a href="#" class="a color">Metodologias</a></li>
            <li><ul class="ul scrool">
            <?php while ($row = mysqli_fetch_array($menu_4)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
            </ul></li>
        </ul>
    </nav>
    <!-- Preguntas -->
    <nav class="menus GPopen">
        <img src="./img/iconArrow.png" alt="iconArrow" class="icon BPclose">
        <ul class="ul">
            <li class="li_2"><a href="#" class="a color1">Preguntas</a></li>
            <?php while ($row = mysqli_fetch_array($menu_p)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <!-- Diagramas -->
    <nav class="menus GDopen ">
        <img src="./img/iconArrow.png" alt="iconArrow" class="icon BDclose">
        <ul class="ul">
            <li class="li_2"><a href="#" class="a color1">Diagramas</a></li>
            <?php while ($row = mysqli_fetch_array($menu_d)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <!-- Mapas -->
    <nav class="menus GMaopen ">
        <img src="./img/iconArrow.png" alt="iconArrow" class="icon BMclose">
        <ul class="ul">
            <li class="li_2"><a href="#" class="a color1">Mapas Cognitivos</a></li>
            <?php while ($row = mysqli_fetch_array($menu_m)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
    <!-- Otras -->
    <nav class="menus GOopen ">
        <img src="./img/iconArrow.png" alt="iconArrow" class="icon BOclose">
        <ul class="ul">
            <li class="li_2"><a href="#" class="a color1">Otras Estrategias</a></li>
            <?php while ($row = mysqli_fetch_array($menu_o)) { ?>
                    <li class="li_2"><a href="?p=<?php echo $row["Busqueda"] ?>" class="a"><?php echo $row["Nombre"] ?></a></li>
                <?php } ?>
        </ul>
    </nav>
</div>