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

    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">

    <!-- Web Fonts -->
    <link rel="stylesheet" type="text/css"
          href="//fonts.googleapis.com/css?family=Open+Sans:400,300,700,600&amp;subset=cyrillic,latin">

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- CSS Implementing Plugins -->
    <link rel="stylesheet" href="assets/plugins/animate.css">
    <link rel="stylesheet" href="assets/plugins/line-icons/line-icons.css">
    <link rel="stylesheet" href="assets/plugins/font-awesome/css/font-awesome.css">

    <!-- CSS Page Style -->
    <link rel="stylesheet" href="assets/css/pages/page_coming_soon_v2.css">

    <link rel="stylesheet" href="assets/plugins/owl-carousel/owl-carousel/owl.carousel.css">

    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.css">
</head>

<body ng-cloak>

<div class="container" ng-controller="landing">
    <div class="coming-soon-v2" style="margin-top: 100px;">

        <div layout="row" layout-align="center center">
            <h1 style="color: white; margin: 20px 20px 20px 20px; text-align: center;"><strong>
                Somos a plataforma que conecta <br>
                seu produto ao seu consumidor <br>
                a partir de milhares de embaixadores e vitrines virtuais
            </strong>
            </h1>
        </div>

        <br>

        <div layout="row">

            <div flex="50" class="coming-soon-v2-left-wrapper">
                <div class="coming-soon-v2-right">
                    <h1><strong>Para você que tem uma loja e quer vender mais ...</strong></h1>
                    <br>
                    <h4 style="margin: 20px 20px 20px 20px;">
                        Já pensou em expor seus produtos em milhares de vitrines virtuais por todo o
                        Brasil?
                    </h4>
                    <br>
                    <div layout="row" layout-align="center center">
                        <md-button href="store.php" class="md-raised md-primary">Quero saber mais</md-button>
                    </div>
                </div>
            </div>

            <div flex="50" class="coming-soon-v2-right-wrapper">
                <div class="coming-soon-v2-right" style="background: #efefef">
                    <h1><strong>... para você que quer ter um negócio</strong></h1>
                    <br>
                    <h4 style="margin: 20px 20px 20px 20px;">
                        Que tal montar uma loja virtual com produtos de excelentes marcas sem investimento e sem
                        estoque?
                    </h4>
                    <br>
                    <div layout="row" layout-align="center center">
                        <md-button href="seller.php" class="md-raised md-accent">Quero saber mais</md-button>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>

<!--</div>&lt;!&ndash;/container&ndash;&gt;-->
<!--=== End Content Part ===-->

<!-- JS Global Compulsory -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/jquery/jquery-migrate.min.js"></script>
<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>

<!-- JS Implementing Plugins -->
<script src="assets/plugins/back-to-top.js"></script>
<script src="assets/plugins/smoothScroll.js"></script>
<script src="assets/plugins/countdown/jquery.plugin.js"></script>
<script src="assets/plugins/countdown/jquery.countdown.js"></script>
<script src="assets/plugins/backstretch/jquery.backstretch.min.js"></script>

<!-- JS Page Level -->
<script src="assets/js/app.js"></script>
<script src="assets/js/plugins/style-switcher.js"></script>
<script src="assets/js/pages/page_coming_soon.js"></script>

<script src="assets/plugins/owl-carousel/owl-carousel/owl.carousel.js"></script>
<script type="text/javascript" src="assets/js/plugins/owl-carousel.js"></script>

<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

<!-- Angular Material Library -->
<script src="http://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

<script>
    var app = angular.module('selladd', ['ngMaterial', 'ngMessages']);
</script>

<script src="assets/js/angular/landing.js"></script>

<script>
    jQuery(document).ready(function () {
        App.init();
        OwlCarousel.initOwlCarousel();
//        PageComingSoon.initPageComingSoon();

        $(".coming-soon-v2-left").backstretch([
            "assets/img/bg/info2.png",
            "assets/img/bg/info1.png",
            "assets/img/bg/info3.png"
        ], {duration: 3000, fade: 1000});

//        $('body').css('margin-top', Number($(document).height() - $('.coming-soon-v2').height()) / 2);
//        $(window).resize(function () {
//            $('body').css('margin-top', Number($(document).height() - $('.coming-soon-v2').height()) / 2);
//        });
    });
</script>
<!--[if lt IE 9]>
<script src="assets/plugins/respond.js"></script>
<script src="assets/plugins/html5shiv.js"></script>
<script src="assets/plugins/placeholder-IE-fixes.js"></script>
<![endif]-->
</body>
</html>
