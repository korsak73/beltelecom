<?php

namespace app\modules\admin\controllers;

use app\models\Users;
use app\models\ImageUpload;
use Yii;
use yii\web\UploadedFile;

/**
 * Default controller for the `admin` module
 */
class DefaultController extends AppAdminController
{
    /**
     * Renders the index view for the module
     * @return string
     */
    public function actionIndex()
    {
        return $this->render('index');
    }

    public function actionSetImage() {

        $model = new ImageUpload;

        $id = Yii::$app->user->identity->getId();

        if (Yii::$app->request->isPost) {

            $user = Users::findIdentity($id);

            $file = UploadedFile::getInstance($model, 'image');

            if ($user->saveImage( $model->UploadFile($file, $user->avatar))) {

                return $this->redirect('/admin/default/index');
            }
        }


        return $this->render('image', ['model' => $model]);
    }

    /**
     * @return string
     */
    public function actionFilesManager()
    {
        return $this->renderAjax('files-manager');
    }
}
