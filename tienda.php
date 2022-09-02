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
    <title>Kyoshi-Tienda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/officialCss.css">
    <link rel="stylesheet" href="./css/style.css">
    <link rel="stylesheet" href="./css/scss.css">
    <style>
        
    </style>
</head>

<body>
    <?php require_once('./Views/VheaderAll.php') 
    ?>
    <div class="d-flex align-items-center bg-yellow mt-5 py-2" style="height: 35rem;">
        <div class="container d-flex flex-column align-items-center px-2 flex-md-row">
            <div class="mr-2">
                <h1 class="mb-2">Tienda</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex modi blanditiis aut officia, doloremque omnis labore ipsam expedita optio eum possimus consequatur pariatur rem aspernatur perspiciatis magnam eaque aliquid esse.</p>
            </div>
            <figure class="figure">
                <img src="./img/plazit.JPG" class="figure-img img-fluid rounded" alt="">
            </figure>
        </div>
    </div>
    <?php include('./Views/anun/vanun_hori.php'); 
    vAnuncio('https://thumbs.gfycat.com/JubilantAffectionateGrouper-max-1mb.gif');
    ?>

    <main class="container mt-5 mb-5">
        <!---libros-->
        <h2 class="my-2 text-center text-lg-start ms-lg-5">Libros</h2>
        <div class="d-flex justify-content-center flex-wrap flex-lg-nowrap">
            
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/librohtml.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="text-danger"><span class="bg-danger p-1 rounded-1 me-1 text-white">000%</span>oferta</span>
                    <span class="my-1">$499.00</span>
                    <h5 class="card-title">El gran libro de HTML5, CSS3 y JavaScript</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/librophp.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$499.00</span>
                    <h5 class="card-title">El gran libro de php</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/librophp.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$499.00</span>
                    <h5 class="card-title">Programador php</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/python.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$499.00</span>
                    <h5 class="card-title">Programador php</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
        </div>
        <?php vAnuncio('https://i.makeagif.com/media/10-15-2013/StRoDv.gif'); ?>
        <!--Cursos-->
        <h2 class="my-2 text-center text-lg-start ms-lg-5">Cursos</h2>
        <div class="d-flex justify-content-center mt-2 flex-wrap flex-lg-nowrap">
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursopython.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="text-danger"><span class="bg-danger p-1 rounded-1 text-white">000%</span> oferta</span>
                    <span class="my-1">$299.00</span>
                    <h5 class="card-title">Curso de PYTHON</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursophp.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$199.00</span>
                    <h5 class="card-title">Curso de PHP Y MYSQL</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursojs.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$499.00</span>
                    <h5 class="card-title">Curso de JavaScript</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursoc.jpg" class="card-img-top" alt="C#">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$199.00</span>
                    <h5 class="card-title">Curso C#</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
        </div>
        <?php vAnuncio('https://www.tupuedesvendermas.com/wp-content/uploads/2020/08/banner-curso-captar-propiedades1.gif'); ?>
        <!--Recursos Gratis-->
        <h2 class="my-2 text-center text-lg-start ms-lg-5">Recursos Gratis</h2>
        <div class="d-flex justify-content-center mt-2 flex-wrap flex-lg-nowrap">
            
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursopython.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="my-1">$299.00</span>
                    <h5 class="card-title">Curso de PYTHON</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursophp.jpg" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$199.00</span>
                    <h5 class="card-title">Curso de PHP Y MYSQL</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursojs.png" class="card-img-top" alt="...">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$499.00</span>
                    <h5 class="card-title">Curso de JavaScript</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
            <div class="card mt-2 me-md-2" style="width: 18rem;">
                <img src="./img/cursoc.jpg" class="card-img-top" alt="C#">
                <div class="card-body d-flex flex-column">
                    <span class="mb-1 mt-05">$199.00</span>
                    <h5 class="card-title">Curso C#</h5>
                    <a href="#" class="">Ver mas</a>
                </div>
            </div>
        </div>
    </main>
    <?php require_once('./Views/footer.php') ?>
</body>

</html>