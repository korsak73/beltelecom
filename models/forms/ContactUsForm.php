<?php

namespace app\models\forms;

use Yii;
use yii\base\Model;

/**
 * ContactForm is the model behind the contact form.
 */
class ContactUsForm extends Model
{
    public $name;
    public $email;
    public $body;



    public function rules()
    {
        return [
            // name, email, subject and body are required
            [['name', 'email'], 'required'],
            [['email'], 'email'],
            [['name', 'body'], 'string', 'max' => 255],
        ];
    }

    /**
     * @return array customized attribute labels
     */
    public function attributeLabels()
    {
        return [
            'name' => 'Логин',
            'email' => 'Email',
            'body' => 'Сообщение',
        ];
    }

    /**
     * Sends an email to the specified email address using the information collected by this model.
     * @param string $email the target email address
     * @return bool whether the model passes validation
     */
    public function contact($email)
    {
        if ($this->validate()) {
           Yii::$app->mailer->compose()
                ->setTo($email)
                ->setFrom([$this->email => $this->name])
                ->setSubject('Message from user ' . $email)
                ->setTextBody($this->body)
                ->send();

            return true;
        }
        return false;
    }
}
