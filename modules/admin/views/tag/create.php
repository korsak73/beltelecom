<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Tags */

$this->title = 'Новая метка';
$this->params['breadcrumbs'][] = ['label' => 'Метки', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
