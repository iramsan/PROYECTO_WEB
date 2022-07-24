<?php include("Db_conex.php");
$conex = $inst->conex();
$query=mysqli_query($conex,"SELECT * FROM menu JOIN categoria ON Cod_Estrategias=FK_Categoria WHERE Nombre LIKE LOWER('%".$_POST["buscar"]."%')"); 
$results = mysqli_num_rows($query); 

if ($results >= 1) { ?>
    <p class="r_search">RESULTADOS: <?php echo $results;?> </p>
    <?php while($getQuery = mysqli_fetch_array($query)){ ?>
    <a class="a_1-0 dflex_1-1" href="main.php<?php echo '?p='.$getQuery["Busqueda"]; ?>"><?php echo strtoupper($getQuery["Nombre"]); ?> <p>➡️</p></a><br>
    <?php } ?>
<?php }else{ ?>
    <p class="r_failSearch">NO SE ENCONTRO NINGUNA COINCIDENCIA</p>
<?php } ?>



