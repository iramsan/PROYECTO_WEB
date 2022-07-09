<?php
require_once('Db_conex.php');

if (isset($_GET['p'])) {
    $x = $_GET['p'];
    $upQuery = mysqli_query($conex,"select m.Nombre,m.Busqueda,c.Categoria from menu as m join categoria as c on m.FK_Categoria=c.Cod_Estrategias WHERE Busqueda = '$x'");
    $getUrl = mysqli_fetch_array($upQuery);

    if ($getUrl["Categoria"]=="Estrategia") {
        require_once('./Views/Vestrategia.php');
    }elseif($getUrl["Categoria"]=="Metodologia"){
        require_once('./Views/Vmetodologia.php');
    }else{
        require_once('./Views/Verror.php');
    }
}else{
    require_once('./Views/Verror.php');//PUSH HOME PAGE
}

?>