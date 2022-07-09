<?php
if (isset($_GET['p'])) {
    $x = $_GET['p'];
    $upQuery = mysqli_query($conex,"select m.Nombre,m.Busqueda,c.Categoria from menu as m join categoria as c on m.FK_Categoria=c.Cod_Estrategias WHERE Busqueda = '$x'");
    $getUrl = mysqli_fetch_array($upQuery);?>

<h1><?php echo $getUrl["Nombre"]; ?></h1>





<?php } ?>