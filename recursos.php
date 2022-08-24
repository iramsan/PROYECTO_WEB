<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="https://cdn.iconscout.com/icon/free/png-256/small-diamond-geometric-blue-38006.png">
    <title>Kyoshi-Recursos</title>
    <link rel="stylesheet" href="./css/officialCss.css">
    <link rel="stylesheet" href="./css/scss.css">
    
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
                <div class="block edit_cart">
                    <img class="imgResour" src="<?php echo $showResour['UrlImagen']; ?>" alt="img">
                    <p><?php echo $showResour['Nombre']; ?></p>
                    <a class="aDownloadResour color_blanco bg_color_1" href="">Descargar</a>
                </div>
            <?php }
            }else{ $upQuery = mysqli_query($conex,"select r.Categoria,rr.Nombre,rr.UrlImagen,rr.Descarga from recurso as r JOIN rutarecurso as rr on r.Cod_recurso = rr.Categoria_id"); ?>
                <img class="imgResBanner" src="./img/imgRecurso/resourBanner.jpg" alt="">
                <div class="dflex_1-0 gap margin">
                    <button class="bttCarous dflex_1-0 escondete" id="bttL"><img class="icon_1-0" src="./img/iconLeft.png" alt="img"></button>
                    <div class="carousel">
                        <article class="articlesResour" id="articlesResources">

                            <?php while($showResour = mysqli_fetch_array($upQuery)){ ?>
                                <div class="block edit_cart">
                                    <img class="imgArticle" src="<?php echo $showResour['UrlImagen'] ?>" alt="">
                                    <p><?php echo $showResour['Nombre']; ?></p>
                                    <a class="aDownloadResour color_blanco bg_color_1" href="">Descargar</a>
                                </div>
                            <?php } ?>

                        </article>
                    </div>
                    <button class="bttCarous dflex_1-0 escondete" id="bttR"><img class="icon_1-0" src="./img/iconRight.png" alt="img"></button>
                </div>
                
                    <section class="">
                        <?php
                        require_once('./Conf/Db_conexConf.php');
                        $ffd50 = mysqli_query($conex,"select * from recurso join rutarecurso on Cod_recurso=Categoria_id where Categoria='plantillas' ORDER BY rand() limit 4"); ?>
                        <h3 class="h3_1">Plantillas</h3>
                        <div class="grid marg_0">
                        <?php while ($row = mysqli_fetch_array($ffd50)) { 
                            if ($row['Categoria'] = "plantillas") { ?>
                                <div class="block edit_cart">
                                    <img class="imgResour" src="<?php echo $row['UrlImagen']; ?>" alt="">
                                    <p><?php echo $row['Nombre']; ?></p>
                                    <a href="#" class="aDownloadResour color_blanco bg_color_1">Descargar</a>
                                </div>  
                            <?php } } ?>
                        </div>
                        <?php $ffc50 = mysqli_query($conex,"select * from recurso join rutarecurso on Cod_recurso=Categoria_id where Categoria='ebooks' ORDER BY rand() limit 4"); ?>
                        <h3 class="h3_1">Libros</h3>
                        <div class="grid marg_0">
                        <?php while ($row2 = mysqli_fetch_array($ffc50)) { 
                            if ($row2['Categoria'] = "ebooks") { ?>
                                <div class="block edit_cart">
                                    <img class="imgResour" src="<?php echo $row2['UrlImagen']; ?>" alt="">
                                    <p><?php echo $row2['Nombre']; ?></p>
                                    <a href="#" class="aDownloadResour color_blanco bg_color_1">Descargar</a>
                                </div>  
                            <?php } } ?>
                        </div>

                </section>
        <?php } ?>
        </div>

     </section>
     <?php require_once('Views/Vfooter.php');?>
</body>
</html>