<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $page array */
/* @var $modelSignupForm app\models\SignupForm */

use yii\bootstrap\Modal;

$header =
//    isset(Yii::$app->authClientCollection) ? '<div class="col-md-12 m-b-sm">' . Yii::t('app', 'Войти используя социальную сеть') . ':</div>'.AuthChoice::widget([
//        'baseAuthUrl' => ['/auth/signup'],
//        'popupMode' => false
//    ]) :
//    '<div class="col-md-12 text-center">' . Yii::t('app', 'Регистрация пользователя') . '</div>';
    '<h3 class="col-md-12 text-center" style="color: #286090"></h3>';
?>
<?php
    Modal::begin([
        'id' => 'users-signup',
        'size' => 'modal-md',
        'header' => $header,
        'clientOptions' => ['show' => false],
        'options' => [],
        'headerOptions' => ['id' => 'modalHeader'],
    ]);
?>
    <?= $this->render('@app/views/auth/_signup-form', ['modelSignupForm' => $modelSignupForm]) ?>

    <div class="clearfix"></div>
<?php
    Modal::end();
?>

