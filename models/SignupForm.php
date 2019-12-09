<?php

namespace app\models;

use Yii;
use yii\base\Model;

class SignupForm extends Model
{
    public $name;
    public $email;
    public $password;
    public $reCaptcha;
    
    public function rules()
    {
        return [
            [['name', 'password', 'email'], 'required'],   // Обязательные поля
            ['email', 'unique', 'targetClass'=>'app\models\Users',
                'message' => Yii::t('app', 'Данный Email уже зарегистрирован.')],  // Электронная почта должна быть уникальна
            ['email', 'email'], // Электронная почта
            [['password'], 'string', 'min' => 4],   // Пароль минимум 4 символа
            [['email', 'name'], 'string', 'max' => 100],    // Строка (максимум 100 символов)
            [['email', 'password', 'name'], 'filter', 'filter' => 'trim'],   // Обрезаем строки по краям
            [['email'], 'email'],
//            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6Lfi87wUAAAAADG65TQ_YpH4obrgMRzvWA3lQs9A']
            ['reCaptcha', \himiklab\yii2\recaptcha\ReCaptchaValidator::className(), 'secret' => '6LeB87wUAAAAAIMX5ByLZo1dtpYDt2uPIOvtCRBj']
        ];
    }

    public function attributeLabels()
    {
        return [
            'name' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'reCaptcha' => '',
        ];
    }
    
    public function signup()
    {
        if($this->validate())
        {
            $user = new Users();
            $user->attributes = $this->attributes;
            return $user->create();
        }
    }
}