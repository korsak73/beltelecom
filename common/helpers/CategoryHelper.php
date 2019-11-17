<?php

namespace app\common\helpers;

use app\models\Categories;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class CategoryHelper
{
    public static function statusList(): array
    {
        return [
            Categories::STATUS_INACTIVE => 'Не подтвержден',
            Categories::STATUS_ACTIVE => 'Активен',
            Categories::STATUS_DRAFT => 'Заблокирован',
        ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status): string
    {
        switch ($status) {
            case Categories::STATUS_DRAFT:
                $class = 'label label-danger';
                break;
            case Categories::STATUS_ACTIVE:
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
         return  $model->status == Categories::STATUS_ACTIVE ?  Html::a('В черновик', ['disallow', 'id' => $model->id], ['class' => 'btn btn-success']) :
             Html::a('Опубликовать', ['allow', 'id' => $model->id], ['class' => 'btn btn-warning']);

    }
}