<?php include("Db_conex.php");
$conex = $inst->conex();
$query=mysqli_query($conex,"SELECT * FROM menu JOIN categoria ON Cod_Estrategias=FK_Categoria WHERE Nombre LIKE LOWER('%".$_POST["buscar"]."%')"); 
$results = mysqli_num_rows($query); 

if ($results >= 1) { ?>
    <p class="p_result"><?php echo $results;?> RESULTADOS</p>
    <?php while($getQuery = mysqli_fetch_array($query)){ ?>
    <a href="main.php<?php echo '?p='.$getQuery["Busqueda"]; ?>" class="atxtsrch dflex_2 gap"><?php echo strtoupper($getQuery["Nombre"]); ?> <p>-</p> <p class="categoria"><?php echo strtoupper($getQuery["Categoria"]); ?></p></a><br>
    <?php } ?>
<?php }else{ ?>
    <p class="notData">NO SE ENCONTRO NINGUNA COINCIDENCIA</p>
<?php } ?>



