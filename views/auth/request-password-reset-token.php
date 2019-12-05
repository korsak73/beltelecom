<?php

use yii\bootstrap\Modal;

/* @var $modelPasswordResetRequestForm app\models\forms\PasswordResetRequestForm */
/* @var $this yii\web\View */
?>
<?php
Modal::begin([
    'id' => 'request-password-reset-token-modal',
    'size' => 'modal-sm',
    'header' => '<h3 class="col-md-12 text-center"  style="color: #286090"></h3>',
    'clientOptions' => ['show' => false],
    'options' => [],
    'headerOptions' => ['id' => 'modalHeader'],
]);
?>

<?= $this->render('_request-password-reset-token-form', [
    'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm,
]) ?>

<div class="clearfix"></div>
<?php
Modal::end();
?>
