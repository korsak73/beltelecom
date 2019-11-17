<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $modelLoginForm app\models\LoginForm */

use yii\bootstrap4\Modal;
//use common\widgets\oAuth\AuthChoice;

$header =
//    isset(Yii::$app->authClientCollection) ?
//    '<div class="col-md-12 m-b-sm">' . Yii::t('app', 'Войти используя социальную сеть') . ':</div>'.AuthChoice::widget([
//        'baseAuthUrl' => ['/auth/index'],
//        'popupMode' => false
//    ]) :
    '<div class="col-md-12 text-center">' . Yii::t('app', 'Вход') . '</div>';
?>

<section class="main-content-w3layouts-agileits">
    <div class="container-login">
        <div class="row inner-sec">
            <div class="login p-5 bg-light mx-auto mw-100">
                <?php
                Modal::begin([
                    'id' => 'users-login',
                    'size' => 'modal-md',
                    'title' => $header,
                    'clientOptions' => ['show' => true],
                    'options' => [],
                ]);
                ?>

                <?= $this->render('_login-form', ['modelLoginForm' => $modelLoginForm]) ?>

                <div class="clearfix"></div>
                <?php
                Modal::end();
                ?>
            </div>
        </div>
    </div>
    <!--    </div>-->
</section>
