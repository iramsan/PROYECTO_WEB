<?php 
include('./Views/anun/vanun_hori.php');
include('./Views/anun/vanun_vertical.php'); 
?>

<?php if (isset($_GET['p'])) {
    $x = $_GET['p'];
    $upQuery = mysqli_query($conex,"select * from menu join rutas on Referencia=Cod_Menu where Busqueda = '$x'");
    $getUrl = mysqli_fetch_array($upQuery); ?>
<?php try {
    $SearchFiles_1 = $getUrl['RutaTxt_1'].".txt";
    $SearchFiles_2 = $getUrl['Ejemplo'];
    if (!file_exists($SearchFiles_1)){
        throw new Exception("File not found.");
    } ?>
<section class="estrategies partir">
    <div class="aparta">
        <?php vAnuncio("https://tpc.googlesyndication.com/simgad/8169744333071237861") ?>
    <div class="plot">
        <h1 class="theme"><?php echo $getUrl["Nombre"]; ?></h1>

        <?php if (isset($_SESSION['logeado'])) { ?>
            <a href="<?php echo $getUrl["Download"]; ?>" class="download color_blanco bg_color_1">Descargar</a>
        <?php }else{ ?>
            <a href="./registro.php" class="download color_blanco bg_color_1">Descargar</a>
        <?php } ?>
    </div>
        <?php
        $txt_file = fopen($getUrl["RutaTxt_1"].'.txt','r');
        while ($line = fgets($txt_file)) {?>
            <?php echo $line; ?></p>
        <?php } fclose($txt_file); 
        ?>
        <p class=" destacar">Ejemplo</p>
        <div class="imgExample">
            <img class="imgExample" src="<?php echo $getUrl["Ejemplo"]; ?>" alt="Ejemplo.pgn">
        </div>
        <!-- VIDEO -->
        <div class="box_01 mgt_01">
            <p class=" destacar">Ejemplo visual</p>
            <?php
                if (isset($_SESSION['logeado'])) { ?>
                <!-- video registrado -->
                    <div class="d_grid_1 d_flox">
                        <video class="videoXD" controls poster="https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105_960_720.png">
                            <source src="./video/video1.mp4" type="video/mp4">
                            <source src="./video/video1.ovg" type="video/ogg">
                            Tu navegador no es compatible con videos HTML5
                        </video>
                    </div>
                <?php }else{ ?>
                    <!-- bloqueo -->
                    <div class="timer denied" id="bloqueo">
                        <span><a href="./registro.php" class="a_1 c_1">inicia sesión</a> para no esperar</span>
                        <a href="https://adf.ly/" target="_blank" id="timer" onclick=emp() class="botonTimer">Desbloquear video</a>
                    </div>
                    <!-- video -->
                    <div class="d_grid_1 d_flox sabeDemasiado" id="vidrio">
                        <video class="videoXD" controls poster="https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105_960_720.png">
                            <source src="./video/video1.mp4" type="video/mp4">
                            <source src="./video/video1.ovg" type="video/ogg">
                            Tu navegador no es compatible con videos HTML5
                        </video>
                    </div>
                    <!-- script -->
                    <script defer>
                        const element = document.getElementById("timer");
                        var i = 40;
                        
                        function emp(){
                            const stop = setInterval(function() {
                            element.innerHTML = `Espera ${i--} segundos`;
                                if (i == -1) {
                                    clearInterval(stop);
                                    const bloqueo = document.getElementById('bloqueo');
                                    bloqueo.classList.toggle('sabeDemasiado');
                                    const vidrio = document.getElementById('vidrio');
                                    vidrio.classList.remove('sabeDemasiado');
                                }
                            }, 1000);
                        }
                    </script>
                    <?php } ?>
        </div>
        <?php vAnuncio("https://thumbs.gfycat.com/JubilantAffectionateGrouper-max-1mb.gif") ?>
        <div class="box_01 mgt_01">
            <p class=" destacar">Contenido que te puede interesar</p>
            <div class="d_grid_1 gap">
                <!-- mostrar contenido sugerido -->
                    <?php
                    require_once('./Conf/Db_conexConf.php');
                    $query = mysqli_query($conex, "SELECT * FROM menu WHERE FK_Categoria = 2 ORDER BY rand() LIMIT 6;");

                    while ($row = mysqli_fetch_array($query)) { ?>
                        <a href="?p=<?php echo $row['Busqueda']; ?>" class="block_1 a_1-0 hovers centertxt grad_col_1 brd_ra bg_blue_box"><?php echo $row['Nombre']; ?></a>
                <?php } ?>
            </div>
        </div>
        <div class="box_01 mgt_01">
            <p class=" destacar">Recursos recomendados</p>
            <div class="d_grid_1 gap">
                <!-- mostrar contenido sugerido -->
                <?php require_once('./Conf/Db_conexConf.php');

                    $query = mysqli_query($conex, "SELECT * FROM rutarecurso ORDER BY RAND() LIMIT 4");
                    while ($row = mysqli_fetch_array($query)) { ?>
                            <a href="" class="block_1 a_1-0 hovers centertxt grad_col_1 brd_ra bg_blue_box"><?php echo $row['Nombre']; ?></a>
                    <?php } ?>
            </div>
        </div>
    </div>
    <?php vAnunV("https://mktefa.ditrendia.es/hs-fs/hubfs/Ejemplos%20publicidad%20banca%20y%20seguros/ditrendia-Ejemplo%20publicidad%20en%20banca%20y%20seguros-banner%20Openbank%20Hipoteca%201.gif?width=300&height=600&name=ditrendia-Ejemplo%20publicidad%20en%20banca%20y%20seguros-banner%20Openbank%20Hipoteca%201.gif",
    "https://i2.wp.com/media.giphy.com/media/3o7btNYqB1p9JAzLB6/giphy.gif?resize=270%2C480&ssl=1") ?>
    </section>
<?php

}catch (Exception $e) {
    require_once('./Views/Verror.php');
    die();
    } ?>
<?php } ?> 