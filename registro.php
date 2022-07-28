<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicia sesion o registrate</title>
    <link rel="stylesheet" href="./css/officialCss.css">
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
                    <input class="inpSend" type="submit" value="Crear una cuenta" id="noAcount">
                </section>
                <section class="formBox">
                    <h1>Registrarte</h1>
                    <form class="form" action="./registro.php" method="post">
                        <a class="forgetP" href="#" id="bttLogBack">Logearse</a>
                        <input class="inpInfo" type="text" id="" name="username" placeholder="Nombre" >
                        <input class="inpInfo" type="text" id="" name="email" placeholder="E-mail" >
                        <input class="inpInfo" type="password" id="" name="passwor" placeholder="Contraseña" >
                        <input class="inpInfo" type="password" id="" name="confirm_password" placeholder="Confirmar contraseña" >
                        <input class="inpSend" type="submit" value="Sign up" name="uploadData">
                    </form>
                </section>
            </div>
        </div>
    </main>
    <?php require_once('./Conf/ConfLogin.php'); 

    if (isset($_SESSION['logeado'])) {
        header("Location: ./index.php");
    }
    ?>
    <footer></footer>
</body>
</html>