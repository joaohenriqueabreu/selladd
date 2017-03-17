<!DOCTYPE html>
<!--[if IE 8]>
<html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]>
<html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en" ng-app="selladd"> <!--<![endif]-->
<head>
    <title>Selladd</title>

    <!-- Meta -->
    <?php include_once('parts/meta.php') ?>

    <!-- Favicon -->
    <link rel="shortcut icon" href="logo-mini.png">

    <?php include_once('parts/styles.php') ?>

</head>

<!--<body ng-cloak>-->
<!--<body class="header-fixed header-fixed-space-default" ng-cloak>-->
<body class="header-fixed header-fixed-space-default">

<div class="wrapper" ng-controller="landing" ng-cloak>

    <!--    Cabeçalho -->
    <?php include_once('parts/header.php') ?>

    <!--    <div class="coming-soon-v2" style="margin-top: 100px;">-->
    <!--    <div class="" style="margin-top: 100px;">-->
    <div class="" style="">

        <?php include_once('parts/main.php') ?>

        <?php include_once('parts/seller.php') ?>

        <?php include_once('parts/supplier.php') ?>

    </div>

    <!--    Rodapé  -->
    <?php include_once('parts/footer.php') ?>

</div>

<!--</div>&lt;!&ndash;/container&ndash;&gt;-->
<!--=== End Content Part ===-->

<?php include_once('parts/scripts.php') ?>
</body>
</html>
