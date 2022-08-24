<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/small-diamond-geometric-blue-38006.png">

    <title>Kyoshi-Principal</title>
    <link rel="stylesheet" href="./css/officialCss.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/scss.css">

</head>

<body>
    <?php require_once('./Views/VheaderAll.php') ?>
    <main class="d-flex flex-direction-col container-100 mt-5">

        <div class="d-flex flex-direction-col mb-5 bg_gray py-2 py-1-sm py-1-md px-1-md py-1-xl">
            <div class="d-flex aling-items-center container-968 d-block-md px-1-sm px-1-md px-1-xl text-align-center-sm">
                <h3>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure animi sed facere eius, expedita id sequi reiciendis excepturi ut officiis?</h3>
                <figure class="figure">
                    <img src="./img/plazit.JPG" class="figure-img my-1-sm my-1-md" alt="icon-empezar">
                </figure>
            </div>
            <div class="container-btn-flex">
                <button class="btn btn-green"><a class="nav-link text-color-white" href="./contenido.php">Empezar ahora</a></button>
            </div>
        </div>

        <!--Recursos-->
        <div class="d-flex flex-direction-col mb-5">
            <div class="container-968 px-1-sm text-align-center-sm px-1-md px-1-xl">
                <h2 class="text-align-center mb-1">Recursos</h2>
                <h3 class="my-1-sm mb-1">Lorem ipsum dolor sit amet consectetur adipisicing elit. Ullam, nemo corrupti quaerat id reiciendis totam ab veritatis maiores molestias voluptate. Numquam illum aliquam rerum officia dicta vero libero error fuga?</h3>
            </div>
            <div class="d-flex aling-items-center container-968">
                <ul class="nav flex-direction-col my-1-sm my-1-md">
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="recursos.php?p=plantillas">Plantillas</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="recursos.php?p=ebooks">eBooks</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="recursos.php?p=guias">Guias de Practica</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="recursos.php?p=casos">Casos</a></li>
                    <li class="nav-item mb-05"><a class="nav-link text-color-blue" href="recursos.php?p=infografias">Infografias</a></li>
                    <li class="nav-item "><a class="nav-link text-color-blue" href="recursos.php?p=rubricas">Rúbricas</a></li>
                </ul>
                <figure class="figure d-none-sm">
                    <img src="./img/plazit.JPG" class="figure-img" alt="icon-img">
                </figure>
            </div>
        </div>
        <!--Tienda en linea-->
        <div class="d-flex justify-center flex-direction-col mb-5 bg-yellow py-2 px-1-sm px-1-md px-1-xl">
            <h2 class="text-align-center mb-1 py-1-sm py-1-md py-1-xl">Tienda en linea</h2>
            <div class="d-flex justify-center aling-items-center container-968 d-block-sm d-block-md text-align-center-sm">
                <h3 class="mr-05">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Eos explicabo fugit quia distinctio? Porro quasi pariatur earum. Repudiandae et sint vero dolore! Perferendis eaque at modi similique perspiciatis alias esse.</h3>
                <figure class="figure">
                    <img src="./img/ahoramismo.jpg" class="figure-img my-1-sm my-1-md" alt="icon-tienda">
                </figure>
            </div>
            <div class="container-btn-flex py-1-sm py-1-md py-1-xl">
                <button class="btn btn-green text-color-white"><a class="nav-link text-color-white" href="tienda.php">Ver tienda</a></button>
            </div>
        </div>

        <!--contenido-->
        <div class="d-flex container-968 flex-direction-col mb-5">
            <h2 class="text-align-center mb-2">Contenido</h2>

            <div class="d-flex px-1 flex-wrap-xl justify-center-xl">
                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="contenido.php?p=lluvia-de-ideas">
                        <img src="./img/ahoramismo.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Lluvia de ideas</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="contenido.php?p=cuadro-sinoptico">
                        <img src="./img/mesaredonda.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Cuadro sinóptico</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="contenido.php?p=mapa-mental">
                        <img src="./img/lluvia.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Mapa mental</h3>
                        </div>
                    </a>
                </div>
            </div>
            <!--Estrategias dos-->
            <div class="d-flex px-1 flex-wrap-xl justify-center-xl">
                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="contenido.php?p=debate">
                        <img src="./img/ahoramismo.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Debate</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="contenido.php?p=cuadro-comparativo">
                        <img src="./img/mesaredonda.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Cuadro comparativo</h3>
                        </div>
                    </a>
                </div>

                <div class="card mr-1 ml-1 mb-1">
                    <a class="nav-link text-color-black" href="contenido.php?p=mapa-conceptual">
                        <img src="./img/lluvia.jpg" class="card-img" alt="img">
                        <div class="card-body">
                            <h3 class="text-align-center">Mapa conceptual</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        <!--Estrategias de enseñanza y aprendizaje-->
        <div class="d-flex flex-direction-col bg-gray py-2 mb-5">
            <h2 class="mb-2 text-align-center">Estrategias de enseñanza y aprendizaje</h2>
            <div class="d-flex justify-center flex-wrap container-968">
                <div class="card mr-1 ml-1 mb-1 bg-white">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2">Indagar en conocimientos</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="">Saber mas</a></button>
                    </div>
                </div>
                <div class="card mr-1 ml-1 mb-1 bg-white">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2">Promover la compresíon</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber mas</a></button>
                    </div>
                </div>
            </div>
            <!--ESTRATEGIAS-->
            <div class=" d-flex justify-center flex-wrap container-968">
                <div class="card mr-1 ml-1 bg-white mb-1-md">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2 mt-1">Estrategias grupales</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber mas</a></button>
                    </div>
                </div>
                <div class="card mr-1 ml-1 bg-white mb-1-md">
                    <div class="card-body text-align-center">
                        <h3 class="mb-2 mt-1">Metodologías</h3>
                        <button class="btn btn-green"><a class="nav-link text-color-white" href="#">Saber mas</a></button>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <?php include('./Views/footer.php');?>
</body>

</html>