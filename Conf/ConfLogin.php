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

// REGISTRO
if (!empty($_POST['uploadData'])) {
    if (!empty($_POST['username']) && !empty($_POST['email']) && !empty($_POST['passwor'])) {
        $u = $_POST['username'];
        $e = $_POST['email'];



        if (preg_match('*\b' . "@gmail.com" . '\b*i', $e)) {
            if (strlen($_POST['passwor']) >= 8) {
                if ($_POST['passwor'] == $_POST['confirm_password']) {
                    $dataCompare = mysqli_query($conex, "SELECT Email FROM usuario WHERE Email='$e'");
                    $dataCompare = mysqli_num_rows($dataCompare);
                    if ($dataCompare == 0) {
                        $p = password_hash($_POST['passwor'], PASSWORD_BCRYPT);
                        $img = "https://joeschmoe.io/api/v1/random";
                        $randomNumber = rand(1,10000);
                        $imgGenerator = $img.$randomNumber;
                        $sql = "INSERT INTO usuario (Nombre,Email,Contraseña,img) VALUES ('$u','$e','$p','$imgGenerator')";
                        $response->insertQuery($conex,$sql);

                        echo "<p class='alertSuccess'>Usuario creado con exito</p>";
                    }else{
                        echo "<p class='alertFail'>El correo ya existe</p>";
                    }
                }else{
                    echo "<p class='alertFail'>Las <span class='remark'>contraseñas</span> no coinciden</p>";
                }
            }else{
                echo "<p class='alertFail'>La contraseña debe tener minimo <span class='remark'>8 caracteres</span></p>";
            }
        }else{
            echo "<p class='alertFail'>Introduce un correo valido <span class='remark'>nombreUsuario@gmail.com</span></p>";
        }


    }else{
        echo "<p class='alertFail'>Para <span class='remark'>registrarte</span> hay que llenar todos los campos solicitados</p>";
    }
}


// LOGEAR
if (!empty($_POST['validate'])) {
    if (!empty($_POST['emailV']) && !empty($_POST['passwordV'])) {
        $e = $_POST['emailV'];
        $datapass = mysqli_query($conex,"SELECT * FROM usuario WHERE Email = '$e'");
        $validPass = mysqli_fetch_array($datapass);
        $count = mysqli_num_rows($datapass); 
        
        if ($count >= 1) {
            if (password_verify($_POST['passwordV'],$validPass['Contraseña'])) {
                $p = $validPass['Contraseña'];
            }else{
                echo "<p class='alertFail'>La <span class='remark'>contraseña</span> no coincide</p>";

                $p = "";
            }
        }else{
            $p = '';
            echo "<p class='alertFail'>El <span class='remark'>correo</span> no existe</p>";
        }

        $query = mysqli_query($conex,"SELECT * FROM usuario WHERE Email='$e' AND Contraseña='$p'");
        $num = mysqli_num_rows($query);

        if ($num != 0) {
            while ($row = mysqli_fetch_array($query)) {
                if ($e == $row['Email'] && $p == $row['Contraseña']) {
                    $_SESSION['idUser'] = $row['Cod_usuario'];
                    $_SESSION['logeado'] = $row['Nombre'];
                    $_SESSION['e'] = $row['Email'];
                    $_SESSION['p'] = $row['Contraseña']; 
                    ?>
                   <script> window.location.replace("./index.php"); </script>
                <?php }else{
                    echo "<p class='alertFail'>Nombre y/o contraseña no coinciden</p>";
                }
            }
        }
    }else{
        echo "<p class='alertFail'>Para <span class='remark'>ingresar</span> hay que llenar todos los campos solicitados</p>";
    }
}
?>