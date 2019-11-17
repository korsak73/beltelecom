
<?php
use app\common\helpers\ArticleHelper;
use app\models\Articles;
use app\models\Categories;
use kartik\daterange\DateRangePicker;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\models\ArticlesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Статьи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="articles-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Создать', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?php Pjax::begin([
        'id' => 'pjax-grid-article-block',
        'timeout' => 10000,
        'enablePushState' => false,
        'options' => [
            'class' => 'min-height-250',
        ]
    ]); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]);


    $gridColumns = [
        ['class' => 'kartik\grid\SerialColumn'],
        [
            'attribute' => 'title',
        ],
        'nameAuthor',
        'categoryTitle',
         [
                'label' => 'Рубрики',
                'attribute' => 'category_id',
                'value' => function ($model) {
                    return empty($model->category) ? null : $model->category->title;
                },
                'filter' => Categories::getAllActiveArray('id', 'title'),
                'filterType' => GridView::FILTER_SELECT2,
                'filterWidgetOptions' => [
                    'language' => 'ru',
                    'pluginOptions' => [
                        'placeholder' => 'Не задано',
                        'multiple' => true,
                        'allowClear' => true
                    ],
                    'options' => [
                        'prompt' => '',
                    ]
                ]
            ],
         [
            'format' => 'raw',
            'attribute' => 'status',
            'filter' => ArticleHelper::statusList(),
            'value' => function (Articles $model) {
                return ArticleHelper::statusLabel($model->status);
            }
        ],
        [
            'attribute' => 'publish_date',
            'filter'     => false,
            'value' => function ($model) {
                return  Yii::$app->formatter->asDatetime($model->publish_date, 'php:d.m.Y H:i');
            }
        ],
        [
            'format' => 'html',
            'label' => 'Изменить статус',
            'attribute' => 'status',
            'filter' => false,
            'value' => function (Articles $model) {
                return ArticleHelper::change($model);
            }
        ],
        [
            'format' => 'html',
            'label' => 'Картинка',
            'value' => function ($data) {
                return Html::img($data->getImage(), ['width' => 100]);
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
//                'view' => function ($url, $model) {
//                    return Html::a('<span class="glyphicon glyphicon-eye-open"></span>', $url, [
//                        'title' => 'Просмотр',
//                    ]);
//                },

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
                    return Url::toRoute(['/admin/article/update', 'id' => $key]);
                }
//                if ($action == 'view' ) {
//                    return Url::toRoute(['/admin/user/view', 'id' => $key]);
//                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['/admin/article/delete', 'id' => $key]);
                }
            },
        ],
//            'urlCreator' => function($action, $model, $key, $index) { return '#'; },
//            'viewOptions'=>['title'=>$viewMsg, 'data-toggle'=>'tooltip'],
//            'updateOptions'=>['title'=>$updateMsg, 'data-toggle'=>'tooltip'],
//            'deleteOptions'=>['title'=>$deleteMsg, 'data-toggle'=>'tooltip'],
//        ],
//        [
//            'class' => '\kartik\grid\CheckboxColumn',
//            'checkboxOptions' => function($model) {
//                if(!$model->status){
//                    return ['disabled' => true];
//                }else{
//                    return [];
//                }
//            },
//        ],
//        [
//                // Import checkbox
//            'class' => '\kartik\grid\CheckBoxColumn',
//            'rowHighlight' => true,
//            'checkboxOptions' => function ($model, $key, $index, $column)
//            {
//                return ['value' => $model->status,
//                'checked' => $model->status ? true : false,
//                ];
//            }
//         ],

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
