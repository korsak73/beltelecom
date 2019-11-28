<?php

use yii\helpers\Url;

?>

<!-- header -->
<div class="header">
    <div class="container-fluid">
        <div class="header-grid">
            <div class="header-grid-left">
                <ul>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">cityline.com</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>+1234 567 892</li>
                    <li><i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="#" class="login" data-toggle="modal" data-target="#myModal4">Login</a></li>
                    <li><i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="#" class="login reg"  data-toggle="modal" data-target="#myModal5">Register</a></li>
                </ul>
            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="logo-nav">
            <div class="logo-nav-left">
                    <h1><a href="<?= Url::home()?>">
                            <img src="public/images/logo.svg" title="Белтелеком">
                        </a>
                    </h1>
                <!-- //logo -->
<!--                <h1><a href="index.html">Белтелеком<span>digital networks</span></a></h1>-->
            </div>
            <div class="logo-nav-left1">
                <nav class="navbar navbar-default">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="<?= Url::home()?>">Главная</a></li>
                            <li class="agileits dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">about</a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="about.html">about us</a></li>
                                    <li><a href="app.html">mobile app</a></li>
                                    <li><a href="testimonials.html">testimonials</a></li>
                                </ul>
                            </li>
                            <li><a href="bbhome.html">Broadband</a></li>
                            <li class="agileits dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">Digital Cable TV</a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="products.html">Products</a></li>
                                    <li><a href="packs.html">Channel & Packs</a></li>
                                    <li><a href="pay.html">Quick Pay</a></li>
                                </ul>
                            </li>
                            <li class="agileits dropdown">
                                <a href="#" data-toggle="dropdown" aria-expanded="true">quick recharge</a>
                                <ul class="dropdown-menu agile_short_dropdown">
                                    <li><a href="pay.html">Digital TV</a></li>
                                    <li><a href="pay.html">Broadband</a></li>
                                </ul>
                            </li>
                            <li><a href="blog.html">Blog</a></li>
                            <li><a href="report.html">Report Issues</a></li>
                            <li><a href="contact.html">contact us</a></li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //header -->
<div class="general_social_icons">
    <nav class="wthree-social">
        <ul>
            <li class="w3_facebook"><a href="https://www.facebook.com/beltelecomby"> <i class="fa fa-facebook"></i>Facebook</a></li>
            <li class="w3_twitter"><a href="https://twitter.com/BeltelecomBy"><i class="fa fa-twitter"></i>Twitter </a></li>
            <li class="w3_dribbble"><a href="https://www.instagram.com/beltelecomby"> <i class="fa fa-instagram"></i>Dribbble</a></li>
            <li class="w3_g_plus"><a href="https://vk.com/bybeltelecom"><i class="fa fa-vk"></i>Google+ </a></li>
            <li class="w3_dribbble"><a href="https://ok.ru/beltelecomby"> <i class="fa fa-ok"></i>Dribbble</a></li>
        </ul>
    </nav>
</div>

<div class="clearfix"></div>

<!--        <div class="messages">-->

<?php if (Yii::$app->session->hasFlash('success')): ?>
    <div class="alert alert-success alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <h4><i class="icon fa fa-check"></i><?= Yii::$app->session->getFlash('success') ?></h4>

    </div>
<?php endif; ?>

<?php if (Yii::$app->session->hasFlash('error')): ?>
    <div class="alert alert-danger alert-dismissable">
        <button aria-hidden="true" data-dismiss="alert" class="close" type="button">×</button>
        <?= Yii::$app->session->getFlash('error') ?>
    </div>
<?php endif; ?>
<!-- //header -->
<!-- banner -->
<div class="banner-silder">
    <div id="JiSlider" class="jislider">
        <ul>
            <li>
                <div class="w3layouts-banner-top">

                    <div class="container">
                        <div class="agileits-banner-info">
<!---->
<!--                            <h3>Welcome to cityline</h3>-->
<!--                            <p>Sit amet neque semper euismod.</p>-->

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top w3layouts-banner-top1">
                    <div class="container">
                        <div class="agileits-banner-info">

<!--                            <h3>Time to go Digital</h3>-->
<!--                            <p>Amet sit neque semper euismod.</p>-->

                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top w3layouts-banner-top2">
                    <div class="container">
                        <div class="agileits-banner-info">
<!--                            <h3>Enjoy free live TV</h3>-->
<!--                            <p>Neque amet sit semper euismod.</p>-->
                        </div>

                    </div>
                </div>
            </li>
            <li>
                <div class="w3layouts-banner-top w3layouts-banner-top3">
                    <div class="container">
                        <div class="agileits-banner-info">
<!--                            <h3>Exclusive Digital services</h3>-->
<!--                            <p>Semper neque amet sit euismod.</p>-->

                        </div>

                    </div>
                </div>
            </li>

        </ul>
    </div>
</div>
<!-- //banner -->