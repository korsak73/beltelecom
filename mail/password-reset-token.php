<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $modelUserForm app\models\Users */

$resetLink = Yii::$app->urlManager->createAbsoluteUrl(['auth/reset-password', 'token' => $modelUserForm->password_reset_token]);
?>
<div class="password-reset">
    <p><?= Yii::t('app', 'Здравствуйте') ?>, <?= Html::encode($modelUserForm->email) ?>,</p>

    <p><?= Yii::t('app', 'Перейдите по ссылке ниже, чтобы сбросить ваш пароль') ?>:</p>

    <p><?= Html::a(Html::encode($resetLink), $resetLink) ?></p>
</div>