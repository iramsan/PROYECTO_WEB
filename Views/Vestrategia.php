<link rel="stylesheet" href="./css/style.css">
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
<section class="Estrategia">
    <div class="div_es">
        <h1 class="h1_es"><?php echo $getUrl["Nombre"]; ?></h1>
        <a href="<?php echo $getUrl["Download"]; ?>" class="a download">Descargar</a>
    </div>
    <?php
        $txt_file = fopen($getUrl["RutaTxt_1"].'.txt','r');
        while ($line = fgets($txt_file)) {?>
            <p><?php echo $line; ?></p>
        <?php } fclose($txt_file); ?>
        <p class="p_es_ej">Ejemplo</p>
        <div class="ContenImg_es dflex">
            <img class="img_es" src="<?php echo $getUrl["Ejemplo"]; ?>" alt="Ejemplo.pgn">
        </div>
    </section>
<?php
require_once('./Views/Vadvertising.php');
}catch (Exception $e) {
    require_once('./Views/Verror.php');
    die();
    }
?>
<?php } ?>






