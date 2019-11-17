<?php

namespace app\models\forms;

use app\models\Users;
use Yii;
use yii\base\InvalidArgumentException;
use yii\base\Model;

/**
 * Форма сброса пароля
 */
class ResetPasswordForm extends Model
{
    public $password;
    /**
     * @var Users
     */
    private $_user;
    /**
     * Creates a form model given a token.
     *
     * @param string $token
     * @param array $config name-value pairs that will be used to initialize the object properties
     * @throws InvalidArgumentException if token is empty or not valid
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidArgumentException(Yii::t('app', 'Токен сброса не может быть пустым.'));
        }
        $this->_user = Users::findByPasswordResetToken($token);
        if (!$this->_user) {
            throw new InvalidArgumentException(Yii::t('app', 'Не верный токен сброса пароля.'));
        }
        parent::__construct($config);
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['password', 'required'],
            ['password', 'string', 'min' => 4],
        ];
    }

    public function attributeLabels()
    {
        return [
            'password' => Yii::t('app', 'Пароль')
        ];
    }

    /**
     * Resets password.
     *
     * @return bool if password was reset.
     */
    public function resetPassword()
    {
        $user = $this->_user;
        $user->setPassword($this->password);
        $user->removePasswordResetToken();
        return $user->save(false);
    }
}