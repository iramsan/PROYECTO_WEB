<?php session_start(); ?>
<?php 
    if (isset($_SESSION['logeado'])) {
        header("Location: ./index.php");
    }
    ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesion o registrate</title>
    <link rel="stylesheet" href="./css/officialCss.css">
    <link rel="stylesheet" href="./css/scss.css">
    <script defer src="./js/register.js"></script>
</head>
<body>
    <?php require_once('./Views/VheaderAll.php'); ?>

    <main class="xxx_sss">
        <div class="register">
            <div class="contBox" id="moveContBox">
                <section class="formBox">
                    <h1>Login</h1>
                    <form class="form" action="./registro.php" method="post">
                        <input class="inpInfo" type="text" id="" name="emailV" placeholder="E-mail" >
                        <input class="inpInfo" type="password" id="" name="passwordV" placeholder="Contraseña" >
                        <a class="forgetP" href="">olvide mi contraseña</a>
                        <input class="inpSend" type="submit" value="Login" name="validate">
                    </form>
                    <span>¿No tienes una cuenta? <a href="#" id="noAcount">crear cuenta</a></span>
                    <!-- <input class="inpSend" type="submit" value="Crear una cuenta" > -->
                </section>
                <section class="formBox">
                    <h1>Registrarte</h1>
                    <form class="form" action="./registro.php" method="post">
                        <label for="" class="labelR">Nombre de usuario</label>
                        <input class="inpInfo" type="text" id="" name="username" placeholder="nombre" >
                        <label for="" class="labelR">Correo</label>
                        <input class="inpInfo" type="text" id="" name="email" placeholder="ejemplo@gmail.com" >
                        <label for="" class="labelR">Contraseña</label>
                        <input class="inpInfo" type="password" id="" name="passwor" placeholder="8 caracteres minimo" >
                        <label for="" class="labelR">Confirmar contraseña</label>
                        <input class="inpInfo" type="password" id="" name="confirm_password" placeholder="8 caracteres minimo" >
                        <input class="inpSend" type="submit" value="Sign up" name="uploadData">
                        <span class="li_1-1 any_txt centertxt">Ya tienes una cuenta <a class="" href="#" id="bttLogBack">iniciar sesion</a></span>

                    </form>
                </section>
            </div>
        </div>
    </main>
    <?php require_once('./Conf/ConfLogin.php');  ?>
    <footer></footer>
</body>
</html>