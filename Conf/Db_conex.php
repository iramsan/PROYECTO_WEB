<?php
class ConnectionDataBase{
    public static function conex(){
        $serverName = "localhost";
        $user = "root";
        $pass = "";
        $db = "id19236313_prjc";
        try {
            $conex = new mysqli($serverName,$user,$pass,$db);
            return $conex;
        } catch (\Throwable $th) {
            die("Fatal error: ".$th);
        }
    }
}
$inst = new ConnectionDataBase();
?>