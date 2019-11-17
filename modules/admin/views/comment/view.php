<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Comments */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Comments', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
\yii\web\YiiAsset::register($this);
?>
<div class="comments-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>

        <?php if($model->isAllowed()):?>
        <?= Html::a('Disallow', ['disallow', 'id' => $model->id], ['class' => 'btn btn-warning']) ?>
        <?php else:?>
        <?= Html::a('Allow', ['allow', 'id' => $model->id], ['class' => 'btn btn-success']) ?>
        <?php endif?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'text',
            'user_id',
            'article_id',
            'status',
            'created_at',
            'updated_at',
        ],
    ]) ?>

</div>
