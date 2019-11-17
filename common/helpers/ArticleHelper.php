<?php

namespace app\common\helpers;

use app\models\Articles;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class ArticleHelper
{
    public static function statusList(): array
    {
        return [
            Articles::STATUS_INACTIVE => 'Черновик',
            Articles::STATUS_ACTIVE => 'Опубликован',
            Articles::STATUS_DRAFT => 'Заблокирован',
        ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status): string
    {
        switch ($status) {
            case Articles::STATUS_DRAFT:
                $class = 'label label-danger';
                break;
            case Articles::STATUS_ACTIVE:
                $class = 'label label-success';
                break;
            default:
                $class = 'label label-default';
        }

        return Html::tag('span', ArrayHelper::getValue(self::statusList(), $status), [
            'class' => $class,
        ]);
    }

    public static function change($model): string
    {
        return  $model->status == Articles::STATUS_ACTIVE ?  Html::a('В черновик', ['disallow', 'id' => $model->id], ['class' => 'label btn-success']) :
            Html::a('Опубликовать', ['allow', 'id' => $model->id], ['class' => 'label btn-warning']);

    }
}