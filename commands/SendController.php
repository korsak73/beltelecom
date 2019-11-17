<?php

namespace app\commands;

use Yii;
use yii\console\Controller;
use app\models\SendSubscr;


class SendController extends Controller
{
    public $defaultAction = 'mail';

    public function actionMail(){
        $model = new SendSubscr();
        $model->send();
        return 0;
    }
}
