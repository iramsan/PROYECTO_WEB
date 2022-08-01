<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kyoshi-Recursos</title>
    <link rel="stylesheet" href="./css/officialCss.css">
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> -->
    <!-- <script defer src="./js/mod.js"></script> -->
    <script defer src="./js/carousel.js"></script>
</head>
<body>
    <?php require_once("./Views/VheaderAll.php"); ?>
    <?php require_once('./Conf/ConfResours.php'); ?>
    <aside class="asideResour">
        <ul class="ul_1-1">
        <li class="li_1-1"><a href="recursos.php" class="li_1-4">Recursos</a></li>
        <?php while ($row = mysqli_fetch_array($resour)) { ?>
                <li class=""><a href="?p=<?php echo $row['Categoria'] ?>" class="a_1-0 li_1-2"><?php echo $row["Nombre"] ?></a></li>
        <?php } ?>
        </ul>
     </aside>
     <section class="cont">
        <?php
        if (isset($_GET['p'])) {
            $x = $_GET['p'];
            $upQuery = mysqli_query($conex,"select r.Categoria,rr.Nombre,rr.UrlImagen,rr.Descarga from recurso as r JOIN rutarecurso as rr on r.Cod_recurso = rr.Categoria_id where r.Categoria='$x'");
            $acc = mysqli_num_rows($upQuery); ?>
            <div><p>Resultados: <?php echo $acc; ?></p></div>
            <div class="grid">
            <?php while($showResour = mysqli_fetch_array($upQuery)){ ?>
                <div class="block">
                    <img class="imgResour" src="<?php echo $showResour['UrlImagen']; ?>" alt="img">
                    <p><?php echo $showResour['Nombre']; ?></p>
                    <a class="aDownloadResour" href="">Descargar</a>
                </div>
            <?php }
            }else{ $upQuery = mysqli_query($conex,"select r.Categoria,rr.Nombre,rr.UrlImagen,rr.Descarga from recurso as r JOIN rutarecurso as rr on r.Cod_recurso = rr.Categoria_id"); ?>
                <img class="imgResBanner" src="./img/imgRecurso/resourBanner.jpg" alt="">
                <div class="dflex_1-0 gap margin">
                    <button class="bttCarous dflex_1-0" id="bttL"><img class="icon_1-0" src="./img/iconLeft.png" alt="img"></button>
                    <div class="carousel">
                        <article class="articlesResour" id="articlesResources">

                            <?php while($showResour = mysqli_fetch_array($upQuery)){ ?>
                                <div class="block">
                                    <img class="imgArticle" src="<?php echo $showResour['UrlImagen'] ?>" alt="">
                                    <p><?php echo $showResour['Nombre']; ?></p>
                                    <a class="aDownloadResour" href="">Descargar</a>
                                </div>
                            <?php } ?>

                        </article>
                    </div>
                    <button class="bttCarous dflex_1-0" id="bttR"><img class="icon_1-0" src="./img/iconRight.png" alt="img"></button>
                </div>
        <?php }
        ?>
        </div>
     </section>
     <a class="bttup" href="#"><img class="icon_1-0" src="./img/iconUp.png" alt=""></a>
</body>
</html>