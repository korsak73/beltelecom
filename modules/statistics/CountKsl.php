<?php
/*
 * Сохраняет в БД IP посетителя
 */
namespace app\modules\statistics;

use Yii;
use app\models\Count;
use app\models\Bot;

class CountKsl
{
    static function init(){
        $ip = Yii::$app->request->userIP; //получаем IP текущего посетителя

        $count_model = new Count(); //модель Count
        $bot_model = new Bot(); //модель Bot

        $str_url =  "http://" . $_SERVER['HTTP_HOST'] . $_SERVER["REQUEST_URI"]; //URL текущей страницы

        //Проверка на бота
        $bot_name = $bot_model->isBot();

        if($bot_name){
            if (!$bot_model->set_stat_bot($bot_name,$str_url,$ip)) {
                var_dump($bot_model->getErrors());
                exit;
            }
        } else {
            //Проверка в черном списке
            $black = $count_model->inspection_black_list($ip);
            if(!$black){
                if (!$count_model->setCount($ip, $str_url, 0)) {
                    var_dump($count_model->getErrors());
                    exit;
                }
            }
        }
    }
}
