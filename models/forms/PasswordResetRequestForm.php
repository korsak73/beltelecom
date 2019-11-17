<?php

namespace app\models\forms;

use app\models\Constants;
use app\models\Users;
use Yii;
use yii\base\Model;

/**
 * Форма сброса пароля
 */
class PasswordResetRequestForm extends Model
{
    public $email;
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['email', 'trim'],
            ['email', 'required'],
            ['email', 'email'],
            ['email', 'exist',
                'targetClass' => 'app\models\Users',
                'filter' => ['status' => Constants::STATUS_ACTIVE],
                'message' => Yii::t('app', 'Пользователь с введем адресом электронной почты не зарегистрирован')
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'email' => Yii::t('app', 'Электронная почта'),
        ];
    }

    /**
     * Sends an email with a link, for resetting the password.
     *
     * @return bool whether the email was send
     */
    public function sendEmail()
    {
        /* @var $modelUserForm Users */
        $modelUserForm = Users::findOne([
            'status' => Constants::STATUS_ACTIVE,
            'email' => $this->email,
        ]);
        if (!$modelUserForm) {
            return false;
        }

        if (! Users::isPasswordResetTokenValid($modelUserForm->password_reset_token)) {
            $modelUserForm->generatePasswordResetToken();
            if (!$modelUserForm->save()) {
                return false;
            }
        }

        return Yii::$app->mailer->compose(
                'password-reset-token',
                ['modelUserForm' => $modelUserForm]
            )
            ->setFrom([Yii::$app->params['adminEmail'] => Yii::t('app', '{name} робот', ['name' => Yii::$app->name])])
            ->setTo($this->email)      // or just $user->email
            ->setSubject(Yii::t('app', 'Сброс пароля для {name}', ['name' => Yii::$app->name]))
            ->addHeader('X-Track-UID', Yii::$app->user->id)
            ->setSendAt(time() + (5 * 60))
            ->addSubstitution('-username-', $modelUserForm->name)
            ->send();
    }
}