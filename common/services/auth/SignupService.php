<?php

namespace app\common\services\auth;

use app\models\Users;
use Yii;
use app\models\SignupForm;

class SignupService
{
    public function signup(SignupForm $form)
    {
        $user = new Users();
        $user->name = $form->name;
        $user->generateAuthKey();
        $user->setPassword($form->password);
        $user->email = $form->email;
        $user->email_confirm_token = Yii::$app->security->generateRandomString();
        $user->status = Users::STATUS_WAIT;

        if(!$user->save()){
            throw new \RuntimeException('Saving error.');
        }

        return $user;
    }

    public function sentEmailConfirm(Users $user)
    {
        $email = $user->email;

//        $sent = Yii::$app->mailer
//            ->compose(
//                [
//                 'html' => 'user-signup-comfirm-html',
//                 'text' => 'user-signup-comfirm-text'
//                ],
//                ['user' => $user])
//            ->setTo($email)
//            ->setFrom([Yii::$app->params['adminEmail'] => $this->name])
//            ->setSubject('Confirmation of registration')
//            ->send();
        $mailer = Yii::$app->mailer;
        $sent = $message = $mailer->compose(
            'user-signup-comfirm', ['user' => $user])
            ->setTo($email)      // or just $user->email
            ->setFrom([Yii::$app->params['adminEmail'] => 'Admin'])
//            ->setReplyTo('noreply@example.com')
            ->setSubject('Confirmation of registration')
//            ->setHtmlBody('Dear -username-,<br><br>My HTML message here')
//            ->setTextBody('Dear -username-,\n\nMy Text message here')
            //->setTemplateId('1234')
            //->addSection('%section1%', 'This is my section1')
            ->addHeader('X-Track-UserType', 'admin')
            ->addHeader('X-Track-UID', Yii::$app->user->id)
            //->addCategory('tests')
            //->addCustomArg('test_arg', 'my custom arg')
            ->setSendAt(time() + (5 * 60))
            //->setBatchId(Yii::$app->mailer->createBatchId())
            //->setIpPoolName('7')
            //->attach(Yii::getAlias('@webroot/files/attachment.pdf'))
            ->addSubstitution('-username-', $user->name)
            ->send();

        if (!$sent) {
            throw new \RuntimeException('Sending error.');
        }
    }

    public function confirmation($token): void
    {
        if (empty($token)) {
            throw new \DomainException('Empty confirm token.');
        }

        $user = Users::findOne(['email_confirm_token' => $token]);
        if (!$user) {
            throw new \DomainException('User is not found.');
        }

        $user->email_confirm_token = null;
        $user->status = Users::STATUS_ACTIVE;
        if (!$user->save()) {
            throw new \RuntimeException('Saving error.');
        }

        if (!Yii::$app->getUser()->login($user)){
            throw new \RuntimeException('Error authentication.');
        }
    }

}