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

<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-animate.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-aria.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.5.5/angular-messages.min.js"></script>

<!-- Angular Material Library -->
<script src="https://ajax.googleapis.com/ajax/libs/angular_material/1.1.0/angular-material.min.js"></script>

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