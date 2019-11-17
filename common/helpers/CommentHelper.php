<?php

namespace app\common\helpers;

use app\models\Comments;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;

class CommentHelper
{
    public static function statusList(): array
    {
        return [
            Comments::STATUS_DISALLOW => 'Черновик',
            Comments::STATUS_ALLOW => 'Опубликован',
        ];
    }

    public static function statusName($status): string
    {
        return ArrayHelper::getValue(self::statusList(), $status);
    }

    public static function statusLabel($status): string
    {
        switch ($status) {
            case Comments::STATUS_DISALLOW:
                $class = 'label label-danger';
                break;
            case Comments::STATUS_ALLOW:
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
         return  $model->status ?  Html::a('В черновик', ['disallow', 'id' => $model->id], ['class' => 'btn btn-success']) :
             Html::a('Опубликовать', ['allow', 'id' => $model->id], ['class' => 'btn btn-warning']);

    }
}