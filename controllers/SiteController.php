<?php

namespace app\controllers;

use app\common\services\auth\SignupService;
use app\models\Articles;
use app\models\Categories;
use app\models\CommentForm;
use app\models\forms\ContactUsForm;
use app\models\forms\PasswordResetRequestForm;
use app\models\forms\ResetPasswordForm;
use app\models\LoginForm;
use app\models\SignupForm;
use app\models\Subscriptions;
use app\models\Tags;
use app\modules\statistics\behaviors\Stat;
use Yii;
use yii\data\Pagination;
use yii\filters\AccessControl;
use yii\helpers\ArrayHelper;
use yii\helpers\Html;
use yii\web\Controller;
use yii\web\Response;
use yii\filters\VerbFilter;
use app\models\ContactForm;

class SiteController extends AppController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
//            'class' => 'app\modules\statistics\behaviors\Stat',
            'access' => [
                'class' => AccessControl::className(),
                'only' => ['logout'],
                'rules' => [
                    [
                        'actions' => ['logout'],
                        'allow' => true,
                        'roles' => ['@'],
                    ],
                ],
            ],
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'logout' => ['post'],
                ],
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction',
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null,
            ],
        ];
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionIndex()
    {
        $this->setMeta('Главная | Белтелеком', 'CityLine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design', 'description');

        return $this->render('index');
    }

    /**
     * Displays homepage.
     *
     * @return string
     */
    public function actionBlog()
    {
        $model = new ContactUsForm();

        $this->setMeta('Новости | Белтелеком', 'CityLine Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design', 'description');

        $data = Articles::getAll(2);
        $popular = Articles::getPopular();
        $recent = Articles::getRecent();
        $categories = Categories::getAllActive();
        $tags = Tags::getAllActive();

        $this->on(yii\web\Controller::EVENT_AFTER_ACTION, function ($event) {
            \app\modules\statistics\CountKsl::init();
        });

        return $this->render('blog', [
            'articles' => $data['articles'],
            'pagination' =>  $data['pagination'],
            'recent' => $recent,
            'popular' => $popular,
            'categories' => $categories,
            'tags' => $tags,
            'contactUsForm' => $model
        ]);
    }

    public function actionView($id)
    {
        //Статистика посещений
//        $this->on(yii\web\Controller::EVENT_AFTER_ACTION, function ($event) {
//            \app\modules\statistics\CountKsl::init();
//        });

        $article = Articles::findOne($id);

        $article->publish_date = date('Y-m-d H:i:s', strtotime($article['publish_date']));

        $keywords = implode(", ", explode(" ", mb_strtolower(trim($article->title))));
        $description =  substr(strip_tags($article->description),0,110) . "...";

        $this->setMeta($article->title, $keywords, $description);

        $popular = Articles::getPopular();
        $recent = Articles::getRecent();
        $categories = Categories::getAllActive();
        $tags = $article->getTagsByArticleId($id);
        $comments = $article->getArticleComments();

        $commentForm = new CommentForm();

        $article->viewedCounter();

        return $this->render('single',[
            'article'=>$article,
            'popular'=>$popular,
            'recent'=>$recent,
            'categories'=>$categories,
            'comments'=>$comments,
            'tags' => $tags,
            'commentForm'=>$commentForm
        ]);
    }

    public function actionCategory($id)
    {
        $data = Categories::getArticlesByCategory($id);
        $popular = Articles::getPopular();
        $recent = Articles::getRecent();
        $category = Categories::getCategoryById($id);
        $categories = Categories::getAllActive();
        $tags = Tags::getTagsByCategoryId($id);
//        foreach ($data['articles'] as $article) {
//            $id = ArrayHelper::getValue($article, 'id');
//            $article = Articles::findOne($id);
//            $tag = $article->getTagsByArticleId($id);
//            $tags = array_merge($tag);
//        }

        return $this->render('category',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular'=>$popular,
            'recent'=>$recent,
            'category'=>$category,
            'categories'=>$categories,
            'tags' => $tags
        ]);
    }

    public function actionTag($id)
    {
        $data = Articles::getArticlesByTag($id);
        $popular = Articles::getPopularByTag($id);
        $tag = Tags::getTagById($id);
        $categories = Categories::getAllActive();
        $tags = Tags::getAllActive();

        return $this->render('tag',[
            'articles'=>$data['articles'],
            'pagination'=>$data['pagination'],
            'popular'=>$popular,
            'tag'=>$tag,
            'categories'=>$categories,
            'tags' => $tags
        ]);
    }

    /**
     * Displays contact page.
     *
     * @return Response|string
     */
    public function actionContact()
    {
        $model = new ContactForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('contactFormSubmitted');

            return $this->refresh();
        }
        return $this->render('contact', [
            'model' => $model
        ]);
    }

    /**
     * Displays about page.
     *
     * @return string
     */
    public function actionAbout()
    {
        return $this->render('about');
    }

    public function actionComment($id)
    {
        $model = new CommentForm();

        if(Yii::$app->request->isPost)
        {
            $model->load(Yii::$app->request->post());
            if($model->saveComment($id))
            {
                Yii::$app->getSession()->setFlash('comment', 'Ваш комментарий через некоторое время будет добавлен!');
                return $this->redirect(['site/view','id'=>$id]);
            }
        }
    }

    public function actionSignupConfirm($token)
    {
        $signupService = new SignupService();

        try{
            $signupService->confirmation($token);
            Yii::$app->session->setFlash('success', 'Вы успешно подтвердили свою регистрацию.');
        } catch (\Exception $e){
            Yii::$app->errorHandler->logException($e);
            Yii::$app->session->setFlash('error', $e->getMessage());
        }

        return $this->goHome();
    }

    public function actionContactUs () {

        $model = new ContactUsForm();
        if ($model->load(Yii::$app->request->post()) && $model->contact(Yii::$app->params['adminEmail'])) {
            Yii::$app->session->setFlash('success', 'Ваше сообщение отправлено');

            return $this->goHome();
        }
    }

    //Форма подписки из виджета
    public function actionSubscription()
    {
        $model = new Subscriptions();

        if ($model->load(Yii::$app->request->post()) && $model->validate()){
            $email = Html::encode($model->email);
            $model->email = $email;
            $model->token = (string) time();

            if ($model->save()) {
                Yii::$app->response->refresh(); //очистка данных из формы
                Yii::$app->session->setFlash('success', 'Подписка оформлена!');
                echo "<p class='alert' style='color:green'>Подписка оформлена!</p>";
//                exit;
                $this->goHome();
            }
        } else {
//            Yii::$app->session->setFlash('error', 'Ошибка оформления подписки.');
//            echo "<p class='alert' style='color:red'>Ошибка оформления подписки.</p>";
            //Проверяем наличие фразы в массиве ошибки

//            if(strpos($model->errors['email'][0], 'уже занято') !== false) {
//                echo "<p class='alert' style='color:red'>Вы уже подписаны!</p>";
//            }
            if(Yii::$app->request->getIsPost()){
                return $this->render('../../common/widgets/views/subscription',[
                    'model' => $model
                ]);
            }
        }
    }
    /*
 * Вынимает нужные данные из массива объектов видео.
 * Массив объектов получаем вызовом метода getItems() у Google_Service_YouTube_VideoListResponse
 */
//    public function getDataVideo(array $videos){
//
//        $dataset = [];
//        array_walk($videos, function ($value) use (&$dataset){
//
//            $dataset[] = [
//                'id' => $value->toSimpleObject()->id,
//                'title' => $value->toSimpleObject()->snippet['title'],
//                'thumbnails' => [
//                    'default' =>  $value->toSimpleObject()->snippet['thumbnails']['default']['url'],
//                    'medium' =>  $value->toSimpleObject()->snippet['thumbnails']['medium']['url'],
//                ],
//                'viewCount' => $value->toSimpleObject()->statistics['viewCount'] ?? '-',
//                'duration' => $this->timeFormatting($value->toSimpleObject()->contentDetails['duration'])
//
//            ];
//        });
//
//        return $dataset;
//    }

    //форматирует время ролика в формат 00:00:00
//    public function timeFormatting($duration){
//
//        $interval = new \DateInterval($duration);
//        $seconds = $interval->days * 86400 + $interval->h * 3600 + $interval->i * 60 + $interval->s;
//
//        $time = gmdate("H:i:s", $seconds);
//        return $time;
//
//    }

}
