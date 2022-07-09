<?php require_once('./Conf/Db_conex.php');  ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyoshi</title>
    <link rel="stylesheet" href="./css/main.css">
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="./js/main.js"></script>
</head>

<body>
    <header>
        <?php require_once('./Views/Vheader.php'); ?>
    </header>
    <!--login-->
    <section class="sopasxd">
    <form action="" class="__login-form __text-center" id="formulario">
            <h3 class="__mb-0">Iniciar sesion</h3>
            <input class="__input-login" type="email" required placeholder="Email">
            <input class="__input-login" type="password" required placeholder="Password">
            <button type="submit" class="__btn-login">Iniciar sesión</button>
    </form>



<!--buscador-->
    <div class="__content-img __flex-column">
        <div class="__container-968 dflex_XD">
            <h2 class="__mb-0">Kyoshi el mejor lugar para <br> aprender y enseñar</h2>
                <form class="__formxd __dflex" action="">
                <div class="__dflex">
                    <input type="image" src="./img/iconSearch.png" class="__btn_search __icon">
                    <input onkeyup="bucar_index($('#buscar_2').val());" type="text" class="__input_search __search-p" id="buscar_2" name="buscar_2" placeholder="Buscar..." >
                </div>
                <div class="results">
                        <div id="getdata" class=""></div>
                    </div>
                </form>
        </div>
    </div>
<!--main-->
    <main class="__flex-column __mt-5">
        <section class="__text-center">
            <div class="__container-968">
                <h2 class="__mb-0">Kyoshi</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit repudiandae doloribus ducimus ut obcaecati delectus quas, deleniti quos, consectetur soluta autem ea impedit corporis laborum tenetur recusandae similique est eos.</p>
                <button class="__btn __mt-1 __btn-start"><a href="./main.php?p=lluvia-de-ideas">Empezar ahora</a></button>
            </div>
        </section >
        <!-- imagenes pendientes xd -->
         <section class="__mt-5 __text-center">
             <h2 class="__mb-0">Contenido</h2>
             <div class="__container-968 __flex-center">

             <a class="__content-card __card" href="./main.php?p=lluvia-de-ideas">    
                        <figure class="__container-img">
                            <img src="https://impulsapopular.com/wp-content/uploads/2019/09/4578-C%C3%B3mo-sacar-provecho-a-la-lluvia-de-ideas.jpg" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">Lluvia de ideas</h3>
                        </div>   
                </a> 
                <a class="__content-card __card" href="./main.php?p=cuadro-sinoptico">
                        <figure class="__container-img">
                            <img src="https://crehana-public-catalog.imgix.net/images/resources/images/4ba8e303/95b7095a.jpg?auto=format&w=718&h=404&dpr=2&q=50&fit=crop" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">cuadro sinóptico</h3>
                        </div>
                </a>

                <a class="__content-card __card" href="./main.php?p=mapa-mental">
                        <figure class="__container-img">
                            <img src="https://prixz.com/salud/wp-content/uploads/2019/06/mapas-mentales-1024x576.jpg" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">Mapa mental</h3>
                        </div>
                </a>

                <a class="__content-card __card" href="./main.php?p=debate">
                        <figure class="__container-img">
                            <img src="./img/imgIndex/imgDebate.jpeg" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">Debate</h3>
                        </div>
                </a>
             </div>
         </section>   

        
         <section class="__mt-2 __text-center">
             <div class="__container-968 __flex-center">

             <a class="__content-card __card" href="./main.php?p=cuadro-comparativo">    
                        <figure class="__container-img">
                            <img src="https://cuadros-comparativos.com/wp-content/uploads/2021/12/Definicion-de-Objetivos-Generales-y-Objetivos-Especificos.jpg" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">Cuadro comparativo</h3>
                        </div>   
                </a> 
                <a class="__content-card __card" href="./main.php?p=mapa-conceptual">
                        <figure class="__container-img">
                            <img src="https://crehana-public-catalog.imgix.net/images/resources/images/5f9c57bb/6ead079d.jpg?auto=format&w=718&h=404&dpr=2&q=50&fit=crop" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">Mapa conceptual</h3>
                        </div>
                </a>

                <a class="__content-card __card" href="./main.php?p=mesa-redonda">
                        <figure class="__container-img">
                            <img src="./img/imgIndex/imgMesa.jpeg" alt="img">
                        </figure>
                        <div class="__container-text">
                            <h3 class="__mt-b">Mesa redonda</h3>
                        </div>
                </a>

                <a class="__content-card __card" href="./main.php?p=simulacion">
                        <figure class="__container-img">
                            <img src="./img/imgIndex/imgSimulacion.jpeg" alt="img">
                        </figure>
                        <div class="__container-text">
                                <h3 class="__mt-b">Simulación</h3>
                        </div>
                </a>
             </div>
         </section>

        <section class="__mt-5 __flex-column">
            <div class="__container-968 text-center">
                <h2 class="__mb-0">Hacemos que aprender sea facil</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minima repellat exercitationem recusandae, laboriosam consequatur earum quidem impedit a suscipit itaque nulla, iure aperiam commodi culpa vitae? Aut cumque ab est!</p>
            </div>
        </section>

        
    </main>

    <footer class="__mt-5 __footer">
        <div class="__container-968">
            <a href="" class="__footer-logo">
                <img src="./img/iconLogo.png" alt="logo">
            </a>    
            <div class="">
                <p><span>&copy</span>2022 Kyoshi.com</p>
            </div>
        </div>
    </footer>
    </section>
</body>
</html>