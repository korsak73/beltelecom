<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "send_subscr".
 *
 * @property int $id
 * @property int $post_id
 * @property int $subscriber_id
 * @property int $end
 */
class SendSubscr extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'send_subscr';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['post_id', 'subscriber_id'], 'required'],
            [['post_id', 'subscriber_id'], 'integer'],
            [['end'],'boolean'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'post_id' => 'Articles ID',
            'subscriber_id' => 'Subscriber ID',
            'end' => 'End',
        ];
    }

    public function send(){
        //В таблице send_subscr выбираем строку с самым большим id поста (последний пост по которому была рассылка)
        $query = $this->find()
            ->limit(1)
            ->orderBy('post_id DESC')
            ->all();
        $last_subscribe = $query[0];

        //Если в этой строке по данному посту нет неотправленных уведомлений или если массива еще нет (1-й раз только)
        if ($last_subscribe->end == 1 or count($last_subscribe) == 0) {
            //Получаем id последнего поста по которому была рассылка или ставим 0, если еще не было.
            $last_post = $last_subscribe->post_id or $last_post = 0;
            //Проверяем есть ли в таблице Articles посты с id большим чем id полученного нами поста из таблицы
            //SendSubscr (то есть новые посты) со статусом PUBLISH
            $post = Articles::find()
                ->limit(1)
                ->where(['>', 'id', $last_post])
                ->andWhere(['publish_status' => 'PUBLISH'])
                ->all();
            //Если нет новых постов, то выходим
            if (!$post) exit;
            //Если новые посты есть, то ставим в очередь В ТАБЛИЦУ send_subscr (создаем новую строку) и выходим
            $this->post_id = $post[0]->id;
            $this->subscriber_id = 0;
            $this->end = 0;
            $this->save();
            //Выходим, а через 10 минут данный скрипт будет снова запущен, и уже пойдёт непосредственно рассылка писем
            exit;
        }

        //Сюда выполнение доходит если есть незаконченные рассылки
        //Получаем id подписчика, которому было отправлено письмо в последний раз
        $last_id = $last_subscribe->subscriber_id;
        //В таблице ПОДПИСЧИКОВ получаем все строки, у которых id > id последнего подписчика из таблицы SendSubscr,
        //то есть которым не отправлено еще уведомление
        $subscriptions = Subscriptions::find()
            ->where(['>', 'id', $last_id])
            ->all();
        $max_count = count($subscriptions);
        //Будем отправлять за 1 раз 10 писем, но если подписчиков < 10, то ставим столько, сколько их.
        if ($max_count > 10) $max_count = 10;
        //перебираем подписчиков, отправляем им письма
        foreach ($subscriptions as $key => $sub){
            //получаем id строки в таблице subscription, он же  номер подписчика
            $subscriber_id = $sub->id;

            /* Метод отправки сообщения.
               Можно использовать данные подписчика:
               $sub->email;
               $sub->addtime;
               ID поста для ссылки на страницу новой статьи - $last_subscribe->post_id */
            $this->sendSub($sub->email, $last_subscribe->post_id);
            //Если достигло максимума (10) отправок, то устанавливаем в ячейку subscriber_id номер текущего
            //подписчика в строке с текущей рассылкой и выходим из цикла
            if ($key >= ($max_count-1)) {
                $send_subscr = self::findOne($last_subscribe->id);
                $send_subscr->subscriber_id = $subscriber_id;
                $send_subscr->update();
                break;
            }
        }
        //Если осталось менее 10 подписчиков которым еще не отправлено уведомление,
        //закрываем строку с текущей рассылкой, В ТАБЛИЦЕ send_subscr ставим `end`='1'  в строке с текущей рассылкой
        if(count($subscriptions) <= $max_count)    {
            $send_subscr = self::findOne($last_subscribe->id);
            $send_subscr->end = 1;
            $send_subscr->update();
        }
    }

    public function sendSub($email,$post_id){
        $home_url = 'http://logodom.by';
        //Формирование ссылки на страницу поста
        $link = 'Articles/view?id=';
        $full_link = $link.$post_id;
        $url = \common\models\Sef::findOne(['link' => $full_link])->link_sef;
        $post_url = $home_url.'/'.$url.'.html';
        $msg = "Здравствуйте! Вы подписаны на рассылку уведомлений о новых статьях по WEB-программированию на сайте $home_url. Сообщаем, что опубликована новая статья. Для просмотра перейдите на $post_url";
        $msg_html  = "<html><body style='font-family:Arial,sans-serif;'>";
        $msg_html .= "<h3 style='font-weight:bold;border-bottom:1px dotted #ccc;'>Здравствуйте! Вы подписаны на рассылку уведомлений о новых статьях по WEB-программированию на сайте " . $home_url . "</h3>\r\n";
        $msg_html .= "<p><strong>Сообщаем, что опубликована новая статья. Для просмотра перейдите на </strong><a href='". $post_url ."'>$post_url</a></p>\r\n";
        $msg_html .= "</body></html>";
        Yii::$app->mailer->compose()
            //->setFrom('admin@yoursite.com') //e-mail админа, не указываем, если указано в common\config\main-local.php
            ->setTo($email) // кому отправляем - реальный адрес куда придёт письмо формата asdf@asdf.com
            ->setSubject('Уведомление о новой WEB-статье') // тема письма
            ->setTextBody($msg) // текст письма без HTML
            ->setHtmlBody($msg_html) // текст письма с HTML
            ->send();
    }
}
