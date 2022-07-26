<?php 
require_once('Db_conex.php');
class Resour extends ConnectionDataBase{
    public function query($conex,$upQuery){
        $upQuery = mysqli_query($conex,$upQuery);
        return $upQuery;
    }
}
$conex = $inst->conex();
$getResour = new Resour();
$resour = $getResour->query($conex,"SELECT * from recurso");
?>