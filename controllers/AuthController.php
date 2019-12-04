<?php

namespace app\controllers;

use app\common\services\auth\SignupService;
use app\models\forms\PasswordResetRequestForm;
use app\models\forms\ResetPasswordForm;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\Users;
use Yii;
use yii\base\InvalidArgumentException;
use yii\web\BadRequestHttpException;
use yii\web\Controller;

class AuthController extends Controller
{
    public function actionLogin()
    {

        if (! Yii::$app->user->isGuest) {
            return $this->goHome();
        }

        $form = new LoginForm();
        if ($form->load(Yii::$app->request->post())) {
            try{
                if($form->login()){
                    return $this->goBack();
                }
            } catch (\DomainException $e){
                Yii::$app->session->setFlash('error', $e->getMessage());
                return $this->goHome();
            }
        }

        return $this->render('login', [
            'modelLoginForm' => $form,
        ]);
    }

    /**
     * Logout action.
     *
     * @return string
     */
    public function actionLogout()
    {
        Yii::$app->user->logout();

        return $this->goHome();
    }

    
    public function actionSignup()
    {
        $form = new SignupForm();
        if ($form->load(Yii::$app->request->post()) && $form->validate()) {
            $signupService = new SignupService();

            try{
                $user = $signupService->signup($form);
                Yii::$app->session->setFlash('success', 'Проверьте Вашу почту для подтверждения регистрации.');
                $signupService->sentEmailConfirm($user);
                return $this->goHome();
            } catch (\RuntimeException $e){
                Yii::$app->errorHandler->logException($e);
                Yii::$app->session->setFlash('error', $e->getMessage());
            }
        }

        return $this->render('signup', [
            'modelSignupForm' => $form,
        ]);
    }

    public function actionLoginVk($uid, $first_name, $photo)
    {
        $user = new Users();
        if($user->saveFromVk($uid, $first_name, $photo))
        {
            return $this->redirect(['site/index']);
        }
    }

    /**
     * Запрос на сброс пароля.
     *
     * @return mixed
     */
    public function actionRequestPasswordReset()
    {
        if (!Yii::$app->request->isPjax || !Yii::$app->request->isAjax) {
            return $this->goHome();
        }

        $modelPasswordResetRequestForm = new PasswordResetRequestForm();
        if ($modelPasswordResetRequestForm->load(Yii::$app->request->post())) {
            if ($modelPasswordResetRequestForm->validate()) {
                if ($modelPasswordResetRequestForm->sendEmail()) {
                    Yii::$app->session->set(
                        'message',
                        [
                            'type'      => 'success',
                            'icon'      => 'glyphicon glyphicon-envelope',
                            'message'   => ' '.Yii::t('app', 'Проверьте вашу электронную почту и следуйте дальнейшим инструкциям.'),
                        ]
                    );
                    $this->goHome();
                } else {
                    Yii::$app->session->set(
                        'message',
                        [
                            'type'      => 'danger',
                            'icon'      => 'glyphicon glyphicon-envelope',
                            'message'   => ' '.Yii::t('app', 'К сожалению, мы не можем сбросить пароль для введенной электронной почты.'),
                        ]
                    );
                    return $this->renderAjax('_request-password-reset-token-form', [
                        'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm,
                    ]);
                }
            }
        }

        if ($modelPasswordResetRequestForm->errors) {
            Yii::$app->session->set(
                'message',
                [
                    'type'      => 'danger',
                    'icon'      => 'glyphicon glyphicon-envelope',
                    'message'   => $modelPasswordResetRequestForm->getFirstError('email'),
                ]
            );
            return $this->renderAjax('_request-password-reset-token-form', [
                'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm,
            ]);
        }

        return $this->renderAjax('request-password-reset-token', [
            'modelPasswordResetRequestForm' => $modelPasswordResetRequestForm,
        ]);
    }

    /**
     * Сброс пароля
     *
     * @param string $token
     * @return mixed
     * @throws BadRequestHttpException
     */
    public function actionResetPassword($token)
    {
        try {
            $modelResetPasswordForm = new ResetPasswordForm($token);
        } catch (InvalidArgumentException $e) {
            throw new BadRequestHttpException($e->getMessage());
        }
        if ($modelResetPasswordForm->load(Yii::$app->request->post()) && $modelResetPasswordForm->validate() && $modelResetPasswordForm->resetPassword()) {
            Yii::$app->session->set(
                'message',
                [
                    'type'      => 'success',
                    'icon'      => 'glyphicon glyphicon-ok',
                    'message'   => Yii::t('app', 'Новый пароль сохранен.'),
                ]
            );
            return $this->goHome();
        }
        return $this->render('resetPassword', [
            'modelResetPasswordForm' => $modelResetPasswordForm,
        ]);
    }

}