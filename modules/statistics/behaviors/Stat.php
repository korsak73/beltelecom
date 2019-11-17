<?php

namespace app\modules\statistics\behaviors;

use yii\base\Behavior;
use Yii;

class Stat extends Behavior
{

    public function events()
    {
            return [
                yii\web\Controller::EVENT_AFTER_ACTION => 'getStat'
            ];
    }

    public function getStat(){
        \app\modules\statistics\CountKsl::init();
    }
}