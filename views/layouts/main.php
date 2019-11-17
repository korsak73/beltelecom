<?php

/* @var $content string */

use app\assets\PublicAsset;
use app\common\widgets\ScrollWidget;
use app\models\Users;
use phpnt\bootstrapNotify\BootstrapNotify;
use yii\helpers\Html;
use yii\helpers\Url;
use app\assets\AppAsset;
use yii\widgets\Pjax;

//AppAsset::register($this);
PublicAsset::register($this);
AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <link rel="shortcut icon" href="<?php echo Url::home(); ?>../favicon.ico?v=1" type="image/x-icon" />
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>
<div class="header-outs" id="header">
    <div class="headder-nav-icon navbar-up">
        <!--      //navigation section -->
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="row blog-img-center">
                <div class="col-lg-6 col-md-6 col-sm-6 icons">
                    <ul>
                        <li><a href="http://facebook.com/"><span class="fab fa-facebook-f"></span></a></li>
                        <li><a href="http://linkedin.com/"><span class="fab fa-linkedin"></span></a></li>
                        <li><a href="http://twitter.com/"><span class="fab fa-twitter"></span></a></li>
                        <li><a href="http://plus.google.com/"><span class="fab fa-google-plus"></span> </a></li>
                    </ul>
                </div>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
                <ul class="navbar-nav pull-right">
                    <li class="nav-item">
                        <a class="nav-link" href="<?= Url::home()?>">Главная</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['/site/about'])?>" class="nav-link">О нас</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= Url::to(['/site/contact'])?>" class="nav-link">Контакты</a>
                    </li>

                    <?php if(! Yii::$app->user->isGuest): ?>
                        <?php if( Users::isIdentityAdmin(Yii::$app->user->identity->getId())): ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= Url::to(['/admin/default/index'])?>"><i class="fas fa-user-alt"></i> Администратор</a>
                            </li>
                        <?php endif;?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['/auth/logout'])?>"><i class="fas fa-user-alt"></i> <?= Yii::$app->user->identity->name ?> (Выход)</a>
                        </li>
                    <?php endif;?>

                    <?php if(Yii::$app->user->isGuest): ?>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['/auth/signup'])?>"><i class="fas fa-sign-in-alt"></i> Регистрация</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= Url::to(['/auth/login'])?>"><i class="fas fa-user"></i></i></i> Вход</a>
                        </li>
                    <?php endif;?>
                </ul>
            </div>
        </nav>
        <?php if( Yii::$app->controller->id != 'auth'): ?>
            <div class="header-w3layouts">
                <div class="hedder-up" >
                    <h1><a class="navbar-brand" href="<?= Url::home()?>"><span class="fab fa-accusoft"></span><br>Лого Дом</a></h1>
                </div>
            </div>
        <?php endif;?>

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

        <!--        </div>-->
    </div>
    <!-- //Navigation -->
</div>
<!-- //banner -->

<?= $content ?>

<!--Footer -->
<section class="buttom-footer py-lg-5 py-md-4 py-sm-3 py-3">
    <div class="headder-logo-icon text-center">
        <span class="fab fa-accusoft"></span>
        <h2><a href="/">Лого Дом</a></h2>
    </div>
    <div class="buttom-nav py-3">
        <nav class="border-line">
            <ul class="nav justify-content-center">
                <li class="nav-item active">
                    <a class="nav-link" href="<?= Url::home()?>">Главная <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a href="<?= Url::to(['/site/about'])?>" class="nav-link ">О нас</a>
                </li>
<!--                <li class="nav-item">-->
<!--                    <a href="service.html" class="nav-link">Services</a>-->
<!--                </li>-->
                <li class="nav-item">
                    <a href="<?= Url::to(['/site/contact'])?>" class="nav-link">Контакты</a>
                </li>
            </ul>
        </nav>
    </div>
</section>
<footer>
    <div class="footer-bottom py-lg-4 py-3 text-center">
        <p>©<?= date('Y') ?> Лого Дом. Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a></p>
    </div>
</footer>
<?php Pjax::begin(['id' => 'pjaxModalUniversal']); ?><?php Pjax::end(); ?>
<?php Pjax::begin(['id' => 'pjaxModalUniversal2']); ?><?php Pjax::end(); ?>
<div id="pjax-reload-block" class="display-none">
    <div class="pjax-reload-block">
        <div class="sk-spinner sk-spinner-fading-circle">
            <div class="sk-circle1 sk-circle"></div>
            <div class="sk-circle2 sk-circle"></div>
            <div class="sk-circle3 sk-circle"></div>
            <div class="sk-circle4 sk-circle"></div>
            <div class="sk-circle5 sk-circle"></div>
            <div class="sk-circle6 sk-circle"></div>
            <div class="sk-circle7 sk-circle"></div>
            <div class="sk-circle8 sk-circle"></div>
            <div class="sk-circle9 sk-circle"></div>
            <div class="sk-circle10 sk-circle"></div>
            <div class="sk-circle11 sk-circle"></div>
            <div class="sk-circle12 sk-circle"></div>
        </div>
    </div>
</div>

<?php
$script = <<< JS
	window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove();
    });
}, 3000);
JS;
//маркер конца строки, обязательно сразу, без пробелов и табуляции
$this->registerJs($script, yii\web\View::POS_LOAD);
 ?>
<!--кнопка вверх-->
<?= ScrollWidget::widget() ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
