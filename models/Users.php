<?php

namespace app\models;

use app\models\Constants;
//use common\models\extend\UserExtend;
use Yii;
use yii\behaviors\TimestampBehavior;
use yii\filters\HttpCache;
use yii\web\IdentityInterface;

/**
 * This is the model class for table "users".
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string email_confirm_token
 * @property string $password
 * @property int $isAdmin
 * @property int $status
 * @property string $avatar
 * @property string $auth_key
 * @property string $remember_token
 * @property string $email_verified_at
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Articles[] $articles
 * @property Comments[] $comments
 */
class Users extends BaseModel implements IdentityInterface
{
    const STATUS_WAIT = 1;
    const STATUS_ACTIVE = 2;
    const STATUS_DELETED = 3;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    static::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    static::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
//                'value' => new Expression('NOW()'),
                'value' => function() { return date('U'); },
            ],
//            [
//                'class' => AttributeBehavior::className(),
//                'attributes' => [
//                    static::EVENT_BEFORE_INSERT => 'created_by',
//                ],
//                'value' => function ($event) {
//                    return Yii::$app->user->getIdentity()->getId();
//                },
//            ],
            [
                'class' => HttpCache::className(),
                'only' => ['index'],
                'lastModified' => function ($action, $params) {
                    $q = new \yii\db\Query();
                    return $q->from('users')->max('updated_at');
                },
            ],
//            'fileBehavior' => [
//                'class' => \backend\modules\attachments\behaviors\FileBehavior::className()
//            ]
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isAdmin', 'login_at', 'document_id'], 'integer'],
            [['email_verified_at', 'created_at', 'updated_at'], 'safe'],
            [['name', 'email', 'password', 'avatar', 'auth_key', 'password_reset_token', 'email_confirm_token'], 'string', 'max' => 255],
            [['ip'], 'string', 'max' => 20],
            ['status', 'in', 'range' => [self::STATUS_DELETED, self::STATUS_WAIT, self::STATUS_ACTIVE]],
            [['remember_token'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Логин',
            'email' => 'Email',
            'password' => 'Пароль',
            'isAdmin' => 'Администратор',
            'status' => 'Статус',
            'avatar' => 'Аватар',
            'password_reset_token' => Yii::t('app', 'Токен восстановления пароля'),
            'email_confirm_token' => Yii::t('app', 'Токен подтвердждения Email'),
            'remember_token' => 'Remember Token',
            'email_verified_at' => 'Прверен',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
            'login_at' => Yii::t('app', 'Авторизован'),
            'document_id' => Yii::t('app', 'Профиль пользователя'),
        ];
    }
    public function getStatusList()
    {
        return [
            self::STATUS_WAIT => 'Не подтвержден',
            self::STATUS_ACTIVE => 'Активен',
            self::STATUS_DELETED => 'Заблокирован'
        ];
    }

    /**
     * Возвращает статус пользователя
     */
    public function getStatusUser()
    {
        switch ($this->status) {
            case Constants::STATUS_WAIT:
                return '<span class="label label-warning">'.$this->statusList[Constants::STATUS_WAIT].'</span>';
                break;
            case Constants::STATUS_ACTIVE:
                return '<span class="label label-success">'.$this->statusList[Constants::STATUS_ACTIVE].'</span>';
                break;
            case Constants::STATUS_DELETED:
                return '<span class="label label-danger">'.$this->statusList[Constants::STATUS_DELETED].'</span>';
                break;
        }
        return false;
    }
    /**
     * @return \yii\db\ActiveQuery
     */
    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['author_id' => 'id']);
    }

    public function getArticles_count()
    {
        return Articles::find()->where(['author_id' => $this->id])->count();
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['user_id' => 'id']);
    }

    public function getComment_count()
    {
        return Comments::find()->where(['user_id' => $this->id])->count();
    }

    /**
     * {@inheritdoc}
     * @return UsersQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new UsersQuery(get_called_class());
    }

    public static function findIdentity($id)
    {
        return Users::findOne($id);
    }

    public static function isIdentityAdmin($id)
    {
        return Users::findOne($id)->isAdmin();
    }

    public function getId()
    {
        return $this->getPrimaryKey();
    }

    public function getAuthKey()
    {
        return $this->auth_key;
    }

    public function validateAuthKey($authKey)
    {
        return $this->auth_key === $authKey;
    }

    public static function findIdentityByAccessToken($token, $type = null)
    {
//        return static::findOne(['access_token' => $token]);
    }

    public static function findByEmail($email)
    {
        return Users::find()->where(['email'=>$email])->one();
    }

    public static function findByUserName($username)
    {
        return static::findOne(['name' => $username]);
    }

    public function validatePassword($password)
    {
//        return ($this->password == $password) ? true : false;
        return Yii::$app->security->validatePassword($password, $this->password);
    }

    public function generateAuthKey(){
        $this->auth_key = Yii::$app->security->generateRandomString();
    }

    public function create()
    {
        return $this->save(false);
    }

    public function saveFromVk($uid, $name, $photo)
    {
        $user = Users::findOne($uid);
        if($user)
        {
            return Yii::$app->user->login($user);
        }

        $this->id = $uid;
        $this->name = $name;
        $this->avatar = $photo;
        $this->create();

        return Yii::$app->user->login($this);
    }

    public function isAdmin()
    {
        return  $this->isAdmin === 1 ? true : false;
    }

    public function setPassword($password)
    {
        $this->password = Yii::$app->security->generatePasswordHash($password);
    }

    public function saveImage ($fileName) {
        $this->avatar = $fileName;

        return $this->save(false);
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload;

        $imageUploadModel->deleteCurrentImage($this->avatar);
    }

    public function beforeDelete()
    {
        $this->deleteImage();

        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public function getImage()
    {
        return $this->avatar ? '/uploads/' . $this->avatar : '/public/images/avatar-default.png';
    }

    /**
     * Поиск по токену восстановления паролья
     * Работает и для неактивированных пользователей
     * @param $token - токен восстановления пароля
     * @return null|static
     */
    public static function findByPasswordResetToken($token)
    {
        if (!static::isPasswordResetTokenValid($token)) {
            return null;
        }
        return static::findOne([
            'password_reset_token' => $token
        ]);
    }

    /**
     * Проверка токена восстановления пароля
     * согласно его давности, заданной константой EXPIRE
     * @param $token - токен восстановления пароля
     * @return bool
     */
    public static function isPasswordResetTokenValid($token)
    {
        if (empty($token)) {
            return false;
        }
        $parts = explode('_', $token);
        $timestamp = (int) end($parts);
        return $timestamp + Yii::$app->params['user.passwordResetTokenExpire'] >= time();
    }

    /**
     * Генерация случайного токена
     * восстановления пароля
     */
    public function generatePasswordResetToken()
    {
        $this->password_reset_token = Yii::$app->security->generateRandomString() . '_' . time();
    }

    /**
     * Очищение токена восстановления пароля
     */
    public function removePasswordResetToken()
    {
        $this->password_reset_token = null;
    }

    /**
     * Проверка токена подтверждения Email
     * @param $email_confirm_token - токен подтверждения электронной почты
     * @return null|static
     */
    public static function findByEmailConfirmToken($email_confirm_token)
    {
        return static::findOne(['email_confirm_token' => $email_confirm_token, 'status' => Constants::STATUS_WAIT]);
    }

    /**
     * Генерация случайного токена
     * подтверждения электронной почты
     */
    public function generateEmailConfirmToken()
    {
        $this->email_confirm_token = Yii::$app->security->generateRandomString();
    }

    /**
     * Очищение токена подтверждения почты
     */
    public function removeEmailConfirmToken()
    {
        $this->email_confirm_token = null;
    }

    /**
     * Действия, выполняющиеся после авторизации.
     * Сохранение IP адреса и даты авторизации.
     *
     * Для активации текущего обновления необходимо
     * повесить текущую функцию на событие 'on afterLogin'
     * компонента user в конфигурационном файле.
     * @param $id - ID пользователя
     */
    public static function afterLogin($id)
    {
        self::getDb()->createCommand()->update(self::tableName(), [
            'ip' => $_SERVER["REMOTE_ADDR"],
            'login_at' => date('Y-m-d H:i:s')
        ], ['id' => $id])->execute();
    }

    /**
     * @return string
     */
    public function getName()
    {
        return empty($this->name) ? 'не задано': $this->name;
    }
    /**
     * {@inheritdoc}
     */
    public static function getUserName($id)
    {
        $user = static::findOne(['id' => $id])->getName();
        if(empty($user)){
            return new Users();
        }

        return $user;
    }

}
