<?php
namespace app\models\forms;

use app\models\Users;
use yii\base\InvalidParamException;
use yii\base\Model;
use Yii;

/**
 * Подтверждение электронной почты
 * Class EmailConfirm
 * @package lowbase\user\models
 */
class EmailConfirm extends Model
{
    /**
     * @var Users
     */
    private $_user;

    /**
     * @param  string $token  - токен
     * @param  array  $config - параметры
     * @throws \yii\base\InvalidParamException - при пустом или неправильном токене
     */
    public function __construct($token, $config = [])
    {
        if (empty($token) || !is_string($token)) {
            throw new InvalidParamException(Yii::t('app', 'Отсутствует код подтверждения.'));
        }
        $this->_user = Users::findByEmailConfirmToken($token);
        if (!$this->_user) {
            throw new InvalidParamException(Yii::t('app', 'Неверный токен.'));
        }
        parent::__construct($config);
    }

    /**
     * Подтверждение электронной почты
     *
     * @return bool|int
     */
    public function confirmEmail()
    {
        $user = $this->_user;
        $user->status = Users::STATUS_ACTIVE;
//        $user->role = 'user';
        $user->removeEmailConfirmToken();   // Удаление токена подтверждения электронной почты

        return (($user->save())) ? $user->id : false;
    }
}