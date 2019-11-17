<?php
//
//namespace app\models;
//
//use Yii;
//use yii\base\Model;
//
///**
// * LoginForm is the model behind the login form.
// *
// * @property User|null $user This property is read-only.
// *
// */
//class LoginForm extends Model
//{
////    public $username;
//    public $email;
//    public $password;
//    public $rememberMe = true;
//    public $is_admin = false;
//
//    private $_user = false;
//
//
//    /**
//     * @return array the validation rules.
//     */
//    public function rules()
//    {
//        return [
//            // username and password are both required
//            [['email', 'password'], 'required'],
//            [['email'], 'email'],
//            // rememberMe must be a boolean value
//            ['rememberMe', 'boolean'],
//            // password is validated by validatePassword()
//            ['password', 'validatePassword'],
//        ];
//    }
//
//    public function attributeLabels()
//    {
//        return [
////            'name' => 'Name',
//            'email' => 'Email',
//            'password' => 'Пароль',
//            'rememberMe' => 'Запомнить',
//        ];
//    }
//
//    /**
//     * Validates the password.
//     * This method serves as the inline validation for password.
//     *
//     * @param string $attribute the attribute currently being validated
//     * @param array $params the additional name-value pairs given in the rule
//     */
//    public function validatePassword($attribute, $params)
//    {
//        if (!$this->hasErrors()) {
//            $user = $this->getUser();
//
//            if (!$user || !$user->validatePassword($this->password)) {
//                $this->addError($attribute, 'Incorrect username or password.');
//            }
//        }
//    }
//
//    /**
//     * Logs in a user using the provided username and password.
//     * @return bool whether the user is logged in successfully
//     */
//    public function login()
//    {
//        if ($this->validate()) {
//
//            $user = $this->getUser();
//            if($user->status === Users::STATUS_ACTIVE){
//                return Yii::$app->user->login($user, $this->rememberMe ? 3600 * 24 * 30 : 0);
//            }
//            if($user->status === Users::STATUS_WAIT){
//                throw new \DomainException('To complete the registration, confirm your email. Check your email.');
//            }
//
//        }
//
//        return false;
//    }
//
//    /**
//     * Finds user by [[username]]
//     *
//     * @return User|null
//     */
//    public function getUser()
//    {
//        if ($this->_user === false) {
////            $this->_user = Users::findByUsername($this->username);
//            $this->_user = Users::findByEmail($this->email);
//        }
//
//        return $this->_user;
//    }
//
//    public function isAdmin()
//    {
//        if ($this->is_admin === false) {
////            $this->_user = Users::findByUsername($this->username);
//            $this->is_admin = Users::isAdmin();
//        }
//
//        return $this->is_admin;
//    }
//}
