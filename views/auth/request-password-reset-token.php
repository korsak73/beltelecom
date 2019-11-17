<?php

use yii\bootstrap4\Modal;

/* @var $modelPasswordResetRequestForm app\models\forms\PasswordResetRequestForm */
/* @var $this yii\web\View */
?>
<?php
Modal::begin([
    'id' => 'request-password-reset-token-modal',
    'size' => 'modal-sm',
    'title' => false,
    'clientOptions' => ['show' => true],
    'options' => [],
]);
?>

<?= $this->render('_request-password-reset-token-form', [
    'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm,
]) ?>

<div class="clearfix"></div>
<?php
Modal::end();
?>
