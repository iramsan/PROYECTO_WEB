<?php
require_once('Db_conex.php');
class Users extends ConnectionDataBase{
    public function insertQuery($conex,$upQuery){
        $upQuery = mysqli_query($conex,$upQuery);
        return $upQuery;
    }
}
$conex = $inst->conex();
$response = new Users();

require_once('./registro.php');

$ms = '';
if (!empty($_POST['uploadData'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['passwor'])) {
        $u = $_POST['username'];
        $e = $_POST['email'];
        // $p = password_hash($_POST['passwor'], PASSWORD_BCRYPT);
        $p = $_POST['passwor'];
        $sql = "INSERT INTO usuario (Nombre,Email,Contraseña) VALUES ('$u','$e','$p')";
        $response->insertQuery($conex,$sql);
        echo "<p class='alertSuccess'>Usuario creado con exito</p>";
    }else{
        echo "<p class='alertFail'>Para <span class='remark'>registrarte</span> hay que llenar todos los campos solicitados</p>";
    }
}


if (!empty($_POST['validate'])) {
    if (!empty($_POST['emailV']) && !empty($_POST['passwordV'])) {
        $e = $_POST['emailV'];
        $p = $_POST['passwordV'];
        $query = mysqli_query($conex,"SELECT * FROM usuario WHERE Email='$e' AND Contraseña='$p'");
        $num = mysqli_num_rows($query);
        if ($num != 0) {
            while ($row = mysqli_fetch_array($query)) {
                if ($e == $row['Email'] && $p == $row['Contraseña']) {
                    $_SESSION['logeado'] = $row['Nombre'];
                    $_SESSION['e'] = $row['Email'];
                    $_SESSION['p'] = $row['Contraseña'];
                }else{
                    echo "<p class='alertFail'>Nombre y/o contraseña no coinciden</p>";
                }
            }
        }else{
            echo "<p class='alertFail'>El correo electronico no existe</p>";
        }
    }else{
        echo "<p class='alertFail'>Para <span class='remark'>ingresar</span> hay que llenar todos los campos solicitados</p>";
    }
}
?>