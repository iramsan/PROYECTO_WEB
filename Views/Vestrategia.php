<?php if (isset($_GET['p'])) {
    $x = $_GET['p'];
    $upQuery = mysqli_query($conex,"select * from menu join rutas on Referencia=Cod_Menu where Busqueda = '$x'");
    $getUrl = mysqli_fetch_array($upQuery);?>
<?php try {
    $SearchFiles_1 = $getUrl['RutaTxt_1'].".txt";
    $SearchFiles_2 = $getUrl['Ejemplo'];
    if (!file_exists($SearchFiles_1)){
        throw new Exception("File not found.");
    } ?>
<section class="estrategies">
    <div class="plot">
        <h1 class="theme"><?php echo $getUrl["Nombre"]; ?></h1>

        <?php if (isset($_SESSION['logeado'])) { ?>
            <a href="<?php echo $getUrl["Download"]; ?>" class="download">Descargar</a>
        <?php }else{ ?>
            <a href="./registro.php" class="download">Descargar</a>
        <?php } ?>


    </div>
    <?php
        $txt_file = fopen($getUrl["RutaTxt_1"].'.txt','r');
        while ($line = fgets($txt_file)) {?>
            <?php echo $line; ?></p>
        <?php } fclose($txt_file); ?>
        <p class="theme">Ejemplo</p>
        <div class="imgExample">
            <img class="imgExample" src="<?php echo $getUrl["Ejemplo"]; ?>" alt="Ejemplo.pgn">
        </div>

        <!-- VIDEO -->
        <div class="box_01 mgt_01">
            <p class="theme">Ejemplo visual</p>
            <?php
                if (isset($_SESSION['logeado'])) { ?>
                    <div class="d_grid_1 ">
                        <video width="320" height="auto" controls poster="https://cdn.pixabay.com/photo/2016/06/02/02/33/triangles-1430105_960_720.png">
                            <source src="./video/video1.mp4" type="video/mp4">
                            <source src="./video/video1.ovg" type="video/ogg">
                            Tu navegador no es compatible con videos HTML5
                        </video>
                    </div>
                <?php }else{ ?> 
                    <span class="denied">Para disfrutar de este contenido primero debes <a href="./registro.php" class="a_1 c_1">iniciar sesión</a></span>
                <?php } ?>
        </div>

        <div class="box_01 mgt_01">
            <p class="theme">Contenido que te puede interesar</p>
            <div class="d_grid_1 gap">
                <!-- mostrar contenido sugerido -->
                <?php require_once('./Conf/gg_vv.php'); ?>
            </div>
        </div>
        <div class="box_01 mgt_01">
            <p class="theme">Contenido que te puede interesar</p>
            <div class="d_grid_1 gap">
                <!-- mostrar contenido sugerido -->
                <?php require_once('./Conf/gg_vv.php'); ?>
            </div>
        </div>
        <div class="box_01 mgt_01">
            <p class="theme">Paginas relevantes similares</p>
            <div class="d_grid_1 ">
                <a href="">www.ejemplo.com/relacionado</a>
                <a href="">www.ejemplo.com/relacionado</a>
                <a href="">www.ejemplo.com/relacionado</a>
            </div>
        </div>
    </section>
<?php
// require_once('./Views/Vadvertising.php');
}catch (Exception $e) {
    require_once('./Views/Verror.php');
    die();
    }
?>
<?php } ?>






