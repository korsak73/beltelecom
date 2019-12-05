<?php

use app\models\Users;
use yii\helpers\Url;

//foreach ([
//             '01'
//         ] as $js) {
//    $this->registerJsFile('/public/js/' . $js . '.js?' . date('U'), [ // .min
//    ]);
//}
?>

<!-- header -->
<div class="header">
    <div class="container-fluid">
        <div class="header-grid">
            <div class="header-grid-left">
                <ul>
                    <li><i class="glyphicon glyphicon-envelope" aria-hidden="true"></i><a href="mailto:info@example.com">beltelecom.by</a></li>
                    <li><i class="glyphicon glyphicon-earphone" aria-hidden="true"></i>123</li>
                    <?php if(! Yii::$app->user->isGuest):?>
                        <?php if( Users::isIdentityAdmin(Yii::$app->user->identity->getId())): ?>
                            <li class="nav-item">
                                <a href="<?= Url::to(['/admin/default/index'])?>"><i class="glyphicon glyphicon-briefcase"></i> Администратор</a>
                            </li>
                        <?php endif;?>
                        <li class="nav-item">
                            <a href="<?= Url::to(['/auth/logout'])?>"><i class="glyphicon glyphicon-log-out"></i> <?= Yii::$app->user->identity->name ?> (Выход)</a>
                        </li>
                    <?php endif;?>

                    <?php if(Yii::$app->user->isGuest): ?>
                        <li class="nav-item">
                            <i class="glyphicon glyphicon-book" aria-hidden="true"></i><a href="<?= Url::to(['/auth/signup'])?>" class="login reg"  data-toggle="modal" data-target="#myModal5" id="header-signup">Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <i class="glyphicon glyphicon-log-in" aria-hidden="true"></i><a href="<?= Url::to(['/auth/login'])?>" class="login" data-toggle="modal" data-target="login"  id="header-login">Вход</a></li>
                        </li>
                    <?php endif;?>
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
                        <ul id="blah" class="nav navbar-nav">

                            <li <?php if (Yii::$app->controller->action->id == 'index'):?>class="active"<?php endif?>>
                                <a href="<?= Url::home()?>">Главная</a>
                            </li>
<!--                            <li class="agileits dropdown">-->
                            <li <?php if (Yii::$app->controller->action->id == 'about'):?>class="active"<?php endif?>>
                                <a href="<?= Url::to(['/site/about'])?>">О Компании</a>
<!--                                <ul class="dropdown-menu agile_short_dropdown">-->
<!--                                    <li><a href="about.html">about us</a></li>-->
<!--                                    <li><a href="app.html">mobile app</a></li>-->
<!--                                    <li><a href="testimonials.html">testimonials</a></li>-->
<!--                                </ul>-->
                            </li>
<!--                            <li><a href="bbhome.html">Broadband</a></li>-->
<!--                            <li class="agileits dropdown">-->
<!--                                <a href="#" data-toggle="dropdown" aria-expanded="true">Digital Cable TV</a>-->
<!--                                <ul class="dropdown-menu agile_short_dropdown">-->
<!--                                    <li><a href="products.html">Products</a></li>-->
<!--                                    <li><a href="packs.html">Channel & Packs</a></li>-->
<!--                                    <li><a href="pay.html">Quick Pay</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
<!--                            <li class="agileits dropdown">-->
<!--                                <a href="#" data-toggle="dropdown" aria-expanded="true">quick recharge</a>-->
<!--                                <ul class="dropdown-menu agile_short_dropdown">-->
<!--                                    <li><a href="pay.html">Digital TV</a></li>-->
<!--                                    <li><a href="pay.html">Broadband</a></li>-->
<!--                                </ul>-->
<!--                            </li>-->
                            <li <?php if (Yii::$app->controller->action->id == 'blog'):?>class="active"<?php endif?>>
                                <a href="<?= Url::to(['/site/blog'])?>">Новости</a>
                            </li>
<!--                            <li><a href="report.html">Report Issues</a></li>-->
                            <li data-target="contact" <?php if (Yii::$app->controller->action->id == 'contact'):?>class="active"<?php endif?>>
                                <a href="<?= Url::to(['/site/contact'])?>">Обратная связь</a>
                            </li>
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
            <li class="w3_facebook"><a href="https://www.facebook.com/beltelecomby"> <i class="fa fa-facebook"></i>Фейсбук</a></li>
            <li class="w3_twitter"><a href="https://twitter.com/BeltelecomBy"><i class="fa fa-twitter"></i>Твиттер </a></li>
            <li class="w3_dribbble"><a href="https://www.instagram.com/beltelecomby"> <i class="fa fa-instagram"></i>Инстаграмм</a></li>
            <li class="w3_g_plus"><a href="https://vk.com/bybeltelecom"><i class="fa fa-vk"></i>В Контакте </a></li>
            <li class="w3_dribbble"><a href="https://ok.ru/beltelecomby"> <i class="fab fa-odnoklassniki"></i>Одноклассники</a></li>
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

<?php
//$script = <<< JS
//$(document).on("click", "#contact" , function(event, data, status, xhr, options) {
//
//       $("#contact").attr("class", "active");
//  });
//
//JS;
//$this->registerJs($script, yii\web\View::POS_HEAD);?>