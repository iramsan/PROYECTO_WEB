<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/officialCss.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script defer src="./js/mod.js"></script>
</head>
<body class="body">
    <?php require_once('./Views/VheaderMovile.php'); ?>
    <main class="main ">
    <?php require_once('./Views/Vmenu.php'); ?>
        <section class="cont">
            <?php include('./Conf/ConfView.php'); ?>
        </section>
    <?php #require_once('Views/Vfooter.php');?>
    </main>
</script>
</body>
</html>