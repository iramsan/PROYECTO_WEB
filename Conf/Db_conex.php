<?php
class ConnectionDataBase{
    public static function conex(){
        $serverName = "localhost";
        $user = "root";
        $pass = "";
        $db = "kyo";
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