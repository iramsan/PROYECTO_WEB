<?php
require_once('Db_conex.php');

$queryEst = mysqli_query($conex,"select m.txt, m.Nombre,m.Busqueda,c.Categoria from menu as m join categoria as c on m.FK_Categoria=c.Cod_Estrategias where c.Categoria = 'Estrategia'");
$queryMeto = mysqli_query($conex,"select m.txt, m.Nombre,m.Busqueda,c.Categoria from menu as m join categoria as c on m.FK_Categoria=c.Cod_Estrategias where c.Categoria = 'Metodologia'");


if (isset($_GET['p'])) {
    $x = $_GET['p'];
    $upQuery = mysqli_query($conex,"select m.Nombre,m.Busqueda,c.Categoria from menu as m join categoria as c on m.FK_Categoria=c.Cod_Estrategias WHERE Busqueda = '$x'");
    $getUrl = mysqli_fetch_array($upQuery);    

    if ($getUrl["Categoria"]=="Estrategia") {
        require_once('./Views/vestrategia.php');
    }elseif($getUrl["Categoria"]=="Metodologia"){
        require_once('./Views/Vmetodologia.php');
    }elseif($getUrl["Categoria"]=="ContenidoEstrategias"){
        showEstra($queryEst, './img/imgStrategies.jpg');
    }elseif($getUrl["Categoria"]=="ContenidoMetodologias"){
        showEstra($queryMeto, './img/imgMethodlogies.png');
    }
}else{
    $value = rand(0,1);

    if ($value == 0) {
        showEstra($queryEst, './img/imgStrategies.jpg');
    }elseif ($value == 1){
        showEstra($queryMeto, './img/imgMethodlogies.png');
    }
    // require_once('./Views/Verror.php');
}


function showEstra($q, $img){ ?>
    <img class="imgResBanner" src="<?php echo $img; ?>" alt="">
    <div class="grid">
    
    <?php 
    while($showResour = mysqli_fetch_array($q)){ ?>
        <div class="block padding edit_cart">
            <p><?php echo $showResour['Nombre']; ?></p>
            <p><?php echo $showResour['txt']; ?></p>
            <a class="aDownloadResour color_blanco bg_color_1" href="?p=<?php echo $showResour['Busqueda']; ?>">Saber Mas...</a>
        </div>
    <?php } ?>
    </div>
<?php }

?>