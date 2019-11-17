<?php
use app\models\Comments;
use app\common\helpers\CommentHelper;
use app\models\Users;
use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\CommentsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Комментарии';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="comments-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
                [
                    'class' => 'yii\grid\SerialColumn'
                ],
                [
                    'attribute' => 'text',
                ],
                [
                    'attribute' => 'user_id',
                    'format' => 'html',
                     'value' => function ($model) {
                        /* @var $model app\models\Users */
                        return empty (! $model->user_id) ? Users::getUserName($model->user_id) : 'не задано';
                    },
                ],
                [
                    'format' => 'raw',
                    'attribute' => 'status',
                    'filter' => CommentHelper::statusList(),
                    'value' => function (Comments $model) {
                        return CommentHelper::statusLabel($model->status);
                    }
                ],
                [
                    'format' => 'html',
                    'label' => 'Изменить статус',
                    'attribute' => 'status',
                    'filter' => false,
                    'value' => function (Comments $model) {
                        return CommentHelper::change($model);
                    }
                ],

                    ['class' => 'yii\grid\ActionColumn'],
                ],
    ]); ?>

    <div class="row" style="margin: 30px 0px 10px 0px;">
        <div class="col-md-3 center">&nbsp;
            <?= Html::a('Назад', ['/admin/default/index'], ['class' => 'btn btn-warning w100']) ?>
        </div>
        <div class="col-md-3 center">
        </div>
        <div class="col-md-3 center">
            <?php
            //            echo Html::submitButton('Сохранить', ['class' => 'btn btn-info w100'])
            ?>
        </div>
        <div class="col-md-3">&nbsp;</div>
    </div>

    <?php Pjax::end(); ?>
</div>
