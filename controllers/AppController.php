<?php
/**
 * Created by PhpStorm.
 * User: Liza
 * Date: 02.04.2019
 * Time: 23:06
 */

namespace app\controllers;

use yii\web\Controller;
use yii\filters\AccessControl;

class AppController extends Controller
{
    protected function setMeta($title = null, $keywords = null, $description = null){
        $this->view->title = $title;
        $this->view->registerMetaTag(['name' => 'keywords', 'content' => "$keywords"]);
        $this->view->registerMetaTag(['name' => 'description', 'content' => "$description"]);
    }
}