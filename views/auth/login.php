<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $modelLoginForm app\models\LoginForm */

use yii\bootstrap\Modal;
//use common\widgets\oAuth\AuthChoice;

$header =  '<h3 class="col-md-12 text-center"  style="color: #286090;"></h3>';
?>
<?php
Modal::begin([
    'id' => 'users-login',
    'size' => 'modal-md',
    'header' => $header,
    'clientOptions' => ['show' => false],
    'options' => [],
    'headerOptions' => [
            'id' => 'modalHeader',
            'class' => 'modal-header',
    ],
]);
?>
<?= $this->render('@app/views/auth/_login-form', ['modelLoginForm' => $modelLoginForm]) ?>

<div class="clearfix"></div>
<?php
Modal::end();
?>

<div class="clearfix"> </div>