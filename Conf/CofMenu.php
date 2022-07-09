<?php 
require_once('Db_conex.php');
class Menu extends ConnectionDataBase{
    public function query($conex,$upQuery){
        $upQuery = mysqli_query($conex,$upQuery);
        return $upQuery;
    }
}
$conex = $inst->conex();
$menu = new Menu();
$menu_1 = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 1.1");
$menu_2 = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 1.2");
$menu_3 = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 1.3");
$menu_4 = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 2.1");
$menu_p = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 'Pregunta'");
$menu_d = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 'Diagrama'");
$menu_m = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 'Mapa'");
$menu_o = $menu->query($conex,"SELECT * FROM menu WHERE Posicion = 'Otro'");
?>