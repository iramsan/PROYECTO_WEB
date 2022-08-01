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
    </section>
<?php
// require_once('./Views/Vadvertising.php');
}catch (Exception $e) {
    require_once('./Views/Verror.php');
    die();
    }
?>
<?php } ?>






