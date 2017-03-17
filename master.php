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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <meta itemprop="name" content="Vitrinet">
    <meta itemprop="description" content="A maneira mais rápida e fácil de se abrir um negócio virtual">
    <meta itemprop="image" content="http://www.selladd.com.br/assets/img/logo/logo-mini.png">

    <meta property="og:title" content="Vitrinet"/>
    <meta property="og:type" content="" />
    <meta property="og:url" content="wwww.selladd.com.br"/>
    <meta property="og:image" itemprop="image" content="http://www.selladd.com.br/assets/img/logo/logo-mini.png"/>
    <meta property="og:description" content="{{ $description }}"/>
    <meta property="og:site_name" content="@yield('og_category')"/>
    <meta property="og:price:amount" content="@yield('og_value')"/>
    <meta property="og:price:currency" content="R$"/>

    <meta property="og:title" content="@{{ ngMeta['og:title'] }}"/>
    <meta property="og:type" content="article"/>
    <meta property="og:url" content="@{{ ngMeta['og:url'] }}"/>
    <meta property="og:image" content="@{{ ngMeta['og:image'] }}"/>
    <meta property="og:description" content="@{{ ngMeta['og:description'] }}"/>
    <meta property="og:site_name" content="comOferta.com"/>
    <meta property="og:price:amount" content="@{{ ngMeta['og:price'] }}"/>
    <meta property="og:price:currency" content="R$"/>

    <!-- Favicon -->
    <link rel="shortcut icon" href="logo-mini.png">

    <?php include_once('parts/styles.php') ?>

</head>

<!--<body ng-cloak>-->
<!--<body class="header-fixed header-fixed-space-default" ng-cloak>-->
<body class="header-fixed header-fixed-space-default">

<div class="wrapper" ng-controller="landing">

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
