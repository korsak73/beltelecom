<?php

use yii\helpers\Html;

/* @var $user \app\models\Users */
?>
<?php
    if (isset($user) && $user):
        $confirmLink = Yii::$app->urlManager->createAbsoluteUrl(['site/signup-confirm', 'token' => $user->email_confirm_token]);

?>
<p><?=Yii::t('app', 'Здравствуйте')?>, <?= Html::encode($user->name) ?>!</p>

<p><?=Yii::t('app', 'Для подтверждения адреса и первичной авторизации пройдите по ссылке')?>:

<?= Html::a(Html::encode($confirmLink), $confirmLink) ?>.</p>

<p><?=Yii::t('app', 'Если Вы не регистрировались на нашем сайте, то просто удалите это письмо.')?></p>

<?php
  endif;
?>

