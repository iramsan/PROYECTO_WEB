<?php
require_once('./Conf/Db_conexConf.php');
$query = mysqli_query($conex, "SELECT * FROM menu ORDER BY rand() LIMIT 6;");

while ($row = mysqli_fetch_array($query)) { ?>
    <a href="?p=<?php echo $row['Busqueda']; ?>" class="block_1 a_1-0 hovers centertxt grad_col_1 brd_ra bg_blue_box"><?php echo $row['Nombre']; ?></a>
<?php } ?>
