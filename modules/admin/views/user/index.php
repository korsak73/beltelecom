<?php

use app\models\Users;
use app\models\UsersSearch;
use yii\data\ActiveDataProvider;
use yii\helpers\Html;
use kartik\grid\GridView;
use yii\helpers\Url;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Клиенты';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <?php Pjax::begin([
        'id' => 'pjax-grid-user-block',
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
            'attribute' => 'name',
        ],
        [
            'attribute' => 'email',
        ],
        [
            'attribute' => 'status',
            'filter'     => false,
//            'value' => function ($model) {
//                return $model->status === 2 ? 'Активен' : 'Не активен';
//            },
            'format' => 'raw',
            'value' => function ($model) {
                /* @var $model app\models\Users */
                return $model->statusUser;
            },
            'contentOptions' => ['style'=>'max-width: 120px !important; width: 120px !important;'],
        ],
        [
            'attribute' => 'Комментариев',
            'filter'     => false,
            'value' => function ($model) {
                return $model->getComment_count();

            },
        ],
        [
            'attribute' => 'Статей',
            'filter'     => false,
            'value' => function ($model) {
                return $model->getArticles_count();
            },
        ],
        [
            'attribute' => 'Администратор',
            'filter'     => false,
            'value' => function ($model) {
                return $model->isAdmin() ? 'Да': 'Нет';
            },
        ],
        [
            'format' => 'html',
            'label' => 'Аватар',
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
//            'buttons' => [
//                'view' => function ($url, $modelUserForm, $id) {
//                    /* @var $modelUserForm app\models\Users */
//                    return Html::a('<i class="fa fa-eye"></i>', 'javascript:void(0);', [
//                        'class' => 'text-info',
//                        'title' => 'Просмотр пользователя',
//                        'onclick' => '
//                                $.pjax({
//                                    type: "GET",
//                                    url: "' . Url::to(['/admin/user/view', 'id' => $modelUserForm->id]) . '",
//                                    container: "#pjaxModalUniversal",
//                                    push: false,
//                                    timeout: 10000,
//                                    scrollTo: false
//                                })'
//                    ]);
//                },
//                'update' => function ($url, $modelUserForm, $id) {
//                    /* @var $modelUserForm app\models\Users */
//                    return Html::a('<i class="fa fa-pen"></i>', 'javascript:void(0);', [
//                        'class' => 'text-warning',
//                        'title' => 'Изменить пользователя',
//                        'onclick' => '
//                                $.pjax({
//                                    type: "GET",
//                                    url: "' . Url::to(['/user/manage/update-user', 'id' => $modelUserForm->id]) . '",
//                                    container: "#pjaxModalUniversal",
//                                    push: false,
//                                    timeout: 10000,
//                                    scrollTo: false
//                                })'
//                    ]);
//                },
//                'delete' => function ($url, $modelUserForm, $id) {
//                    /* @var $modelUserForm app\models\Users */
//                    return Html::a('<i class="fa fa-trash"></i>', 'javascript:void(0);', [
//                        'class' => 'text-danger',
//                        'title' => 'Удалить пользователя',
//                        'onclick' => '
//                                $.pjax({
//                                    type: "GET",
//                                    url: "' . Url::to(['/user/manage/confirm-delete-user', 'id' => $modelUserForm->id]) . '",
//                                    container: "#pjaxModalUniversal",
//                                    push: false,
//                                    timeout: 10000,
//                                    scrollTo: false
//                                })'
//                    ]);
//                },
//            ],
            'urlCreator' => function($action, $model, $key, $index) {
                if ($action == 'update' ) {
                    return Url::toRoute(['/admin/user/update', 'id' => $key]);
                }
//                if ($action == 'view' ) {
//                    return Url::toRoute(['/admin/user/view', 'id' => $key]);
//                }
                if ($action == 'delete' ) {
                    return Url::toRoute(['/admin/user/delete', 'id' => $key]);
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
