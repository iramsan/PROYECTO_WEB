<?php
require_once('Db_conex.php');
class Model extends ConnectionDataBase{
    public function get_Model($conexDB){
        if (isset($_GET['p'])) {
            $x = $_GET['p'];
            $query = "select m.Nombre,m.Busqueda,r.Ruta from menu as m JOIN rutas as r on m.Cod_Menu=r.Referencia where Busqueda='$x'";
            $upQuery = mysqli_query($conexDB, $query);
            $getUrl = mysqli_fetch_array($upQuery);
            require_once(/*$getUrl['Ruta'].*/'./Views/Vestrategia.php');
            return $getUrl;
        }else{
            echo "No se encontro nada";
        }
    }
}
$conex = $inst->conex();
$model = new Model();
$model_1 = $model->get_Model($conex);
?>