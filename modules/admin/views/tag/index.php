
<?php

use app\common\helpers\TagHelper;
use app\models\Categories;
use app\models\Tags;
use kartik\daterange\DateRangePicker;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Метки';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="tags-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin([
        'id' => 'pjax-grid-tags-block',
        'timeout' => 10000,
        'enablePushState' => false,
        'options' => [
            'class' => 'min-height-250',
        ]
    ]); ?>
    <?php

    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],
        [
            'attribute' => 'status',
            'filter'     =>  TagHelper::statusList(),
            'format' => 'raw',
            'value' => function (Tags $model) {
                /* @var $model app\models\Tags */
                return TagHelper::statusLabel($model->status);
            },
            'contentOptions' => ['style'=>'max-width: 120px !important; width: 120px !important;'],
        ],
        [
            'attribute' => 'title',
        ],
        [
            'attribute' => 'slug',
            'filter'     => false,
        ],
        [
            'format' => 'html',
            'label' => 'Изменить статус',
            'attribute' => 'status',
            'filter' => false,
            'value' => function (Tags $model) {
                return TagHelper::change($model);
            }
        ],
        [
            'attribute' => 'created_at',
            'filter'     => false,
            'value' => function ($model) {
                return  Yii::$app->formatter->asDatetime($model->created_at, 'php:d.m.Y H:i');
            }
        ],
        [
            'attribute' => 'updated_at',
            'filter'     => false,
            'value' => function ($model) {
                return  Yii::$app->formatter->asDatetime($model->updated_at, 'php:d.m.Y H:i');
            }
        ],
        [
            'class' => 'kartik\grid\ActionColumn',
            'header' => 'Действия',
            'headerOptions' => ['style' => 'color:#337ab7'],
            'template' => '{update}{delete}',
            'buttons' => [
                'update' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-pencil"></span>', $url, [
                        'title' => 'редактирование',
//                            'data-pjax' => true,
                        'data-method' => 'post'
                    ]);
                },
                'delete' => function ($url, $model) {
                    return Html::a('<span class="glyphicon glyphicon-trash"></span>', $url, [
                        'title' => 'удаление',
//                            'data-method' => 'post',
                        'data' => [
                            'confirm' => 'Вы уверены, что хотите удалить?',
                            'method' => 'post',
                        ],
                    ]);
                }

            ],
            'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['/admin/tag/update', 'id' => $key]);
                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['/admin/tag/delete', 'id' => $key]);
                }
            },
        ],
    ];


    echo GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => $gridColumns,
        'responsive'=>true,
        'hover'=>true,
        'containerOptions' => ['style'=>'overflow: auto'], // only set when $responsive = false
        'pjax' => true,
        'toolbar' => [
            '{export}'
        ],
        'export' => [
            'fontAwesome' => true,
            'label' => 'Экспорт данных'
        ],
        'bordered' => true,
        'striped' => false,
        'condensed' => false,
        'floatHeader' => true,
//        'floatHeaderOptions' => ['scrollingTop' => $scrollingTop],
        'showPageSummary' => true,
        'panel' => [
            'type' => GridView::TYPE_INFO
        ],
    ]);
    ?>
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
