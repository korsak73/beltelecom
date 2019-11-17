<?php
/*
 * Кнопка подписки
 */
namespace app\common\widgets;

use yii\base\Widget;
use app\models\Subscriptions;

class SubscriptionWidget extends Widget {

    public $subscription;

    public function init() {
        $this->subscription = new Subscriptions();
    }

    public function run() {
        return $this->render('subscription',[
            'model' => $this->subscription,
        ]);
    }
}