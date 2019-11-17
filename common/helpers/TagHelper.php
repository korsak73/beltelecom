<?php

namespace app\common\helpers;

use app\models\Tags;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class TagHelper
{
    public static function statusList(): array
    {
        return [
            Tags::STATUS_INACTIVE => 'Не подтвержден',
            Tags::STATUS_ACTIVE => 'Активен',
            Tags::STATUS_DRAFT => 'Заблокирован',
        ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status): string
    {
        switch ($status) {
            case Tags::STATUS_DRAFT:
                $class = 'label label-danger';
                break;
            case Tags::STATUS_ACTIVE:
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
         return  $model->status == Tags::STATUS_ACTIVE ?  Html::a('В черновик', ['disallow', 'id' => $model->id], ['class' => 'btn btn-success']) :
             Html::a('Опубликовать', ['allow', 'id' => $model->id], ['class' => 'btn btn-warning']);

    }
}