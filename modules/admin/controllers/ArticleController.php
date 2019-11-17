<?php

namespace app\modules\admin\controllers;

use app\models\Categories;
use app\models\ImageUpload;
use app\models\Tags;
use Yii;
use app\models\Articles;
use app\models\ArticlesSearch;
use yii\helpers\ArrayHelper;
use yii\web\NotFoundHttpException;
use yii\filters\VerbFilter;
use yii\web\UploadedFile;

/**
 * ArticleController implements the CRUD actions for Articles model.
 */
class ArticleController extends AppAdminController
{
    /**
     * {@inheritdoc}
     */
    public function behaviors()
    {
        return [
            'verbs' => [
                'class' => VerbFilter::className(),
                'actions' => [
                    'delete' => ['POST'],
                ],
            ],
        ];
    }

    /**
     * Lists all Articles models.
     * @return mixed
     */
    public function actionIndex()
    {
        $searchModel = new ArticlesSearch();
        $dataProvider = $searchModel->search(Yii::$app->request->queryParams);

        return $this->render('index', [
            'searchModel' => $searchModel,
            'dataProvider' => $dataProvider,
        ]);
    }

    /**
     * Displays a single Articles model.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionView($id)
    {
        return $this->render('view', [
            'model' => $this->findModel($id),
        ]);
    }

    /**
     * Creates a new Articles model.
     * If creation is successful, the browser will be redirected to the 'view' page.
     * @return mixed
     */
    public function actionCreate()
    {
        $model = new Articles();

        if (Yii::$app->request->getIsPost()) {
            $data = Yii::$app->request->post();

            if ($model->load($data))
            {
                $model->publish_date = date('Y-m-d H:i:s', strtotime($data['Articles']['publish_date']));
                if($model->saveArticle()) {
                    return $this->redirect(['index', 'id' => $model->id]);
                }
            }
        }

        return $this->render('create', [
            'model' => $model,
        ]);
    }

    /**
     * Updates an existing Articles model.
     * If update is successful, the browser will be redirected to the 'view' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionUpdate($id)
    {
        $model = $this->findModel($id);
        $data = Yii::$app->request->post();

        if ($model->load($data))
        {
//            var_dump($data);exit;
            $model->publish_date = date('Y-m-d H:i:s', strtotime($data['Articles']['publish_date']));
//            var_dump($data);exit;
            if($model->saveArticle())
            {
                return $this->redirect(['index', 'id' => $model->id]);
            }
        }

        return $this->render('update', [
            'model' => $model,
        ]);
    }

    /**
     * Deletes an existing Articles model.
     * If deletion is successful, the browser will be redirected to the 'index' page.
     * @param integer $id
     * @return mixed
     * @throws NotFoundHttpException if the model cannot be found
     */
    public function actionDelete($id)
    {
        $this->findModel($id)->delete();

        return $this->redirect(['index']);
    }

    /**
     * Finds the Articles model based on its primary key value.
     * If the model is not found, a 404 HTTP exception will be thrown.
     * @param integer $id
     * @return Articles the loaded model
     * @throws NotFoundHttpException if the model cannot be found
     */
    protected function findModel($id)
    {
        if (($model = Articles::findOne($id)) !== null) {
            return $model;
        }

        throw new NotFoundHttpException('The requested page does not exist.');
    }

    public function actionSetImage($id) {

        $model = new ImageUpload;

        if (Yii::$app->request->isPost) {

            $article = $this->findModel($id);

            $file = UploadedFile::getInstance($model, 'image');

//            var_dump();die();
//            $model->UploadFile($file);
            if ($article->saveImage( $model->UploadFile($file, $article->image))) {

                return $this->redirect(['index', 'id' => $article->id]);
            }
        }

       return $this->render('image', ['model' => $model]);
    }

    public function actionSetCategory($id) {

        $articles = $this->findModel($id);
        $selectedCategory = empty(! $articles->category) ? $articles->category->id : null;
        $categories = ArrayHelper::map(Categories::getAllActive(), 'id', 'title');

        $data = Yii::$app->request->post();
//        var_dump($articles);die();
        if ($data) {
            $category = Yii::$app->request->post('category');
            $articles->publish_date = date('Y-m-d H:i:s', strtotime($articles['publish_date']));
            if ($articles->saveCategory($category)) {

                return $this->redirect(['index', 'id' => $articles->id]);
            }
        }

       return $this->render('category', [
           'articles' => $articles,
           'selectedCategory' => $selectedCategory,
           'categories' => $categories
       ]);
    }

    public function actionSetTags($id) {

        $article = $this->findModel($id);
        $selectedTags = $article->getSelectedTags();
        $tags = ArrayHelper::map(Tags::getAllActive(), 'id', 'title');
//        var_dump($selectedTags);die();
        if (Yii::$app->request->isPost) {

            $tags = Yii::$app->request->post('tags');
            $article->publish_date = date('Y-m-d H:i:s', strtotime($article['publish_date']));
            $article->saveTags($tags);

                return $this->redirect(['index', 'id' => $article->id]);
        }

       return $this->render('tags', [
           'selectedTags' => $selectedTags,
           'tags' => $tags
       ]);
    }
//
//    public function saveArticle()
//    {
//        $this->user_id = Yii::$app->user->id;
//        return $this->save(false);
//    }

    public function saveImage($filename)
    {
        $this->image = $filename;
        return $this->save(false);
    }

    public function getImage()
    {
        return ($this->image) ? '/uploads/' . $this->image : '/no-image.png';
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload();
        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();
        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    public function saveCategory($category_id)
    {
        $category = Categories::findOne($category_id);
        if($category != null)
        {
            $this->link('category', $category);
            return true;
        }
    }

    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
            ->viaTable('article_tag', ['article_id' => 'id']);
    }

    public function getSelectedTags()
    {
        $selectedIds = $this->getTags()->select('id')->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function saveTags($tags)
    {
        if (is_array($tags))
        {
            $this->clearCurrentTags();

            foreach($tags as $tag_id)
            {
                $tag = Tags::findOne($tag_id);
                $this->link('tags', $tag);
            }
        }
    }

    public function clearCurrentTags()
    {
        ArticlesTags::deleteAll(['article_id'=>$this->id]);
    }

    public function getDate()
    {
        return Yii::$app->formatter->asDate($this->date);
    }

    public static function getAll($pageSize = 5)
    {
        // build a DB query to get all articles
        $query = Articles::find();

        // get the total number of articles (but do not fetch the article data yet)
        $count = $query->count();

        // create a pagination object with the total count
        $pagination = new Pagination(['totalCount' => $count, 'pageSize'=>$pageSize]);

        // limit the query using the pagination and retrieve the articles
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['articles'] = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }

    public static function getPopular()
    {
        return Articles::find()->orderBy('viewed desc')->limit(3)->all();
    }

    public static function getRecent()
    {
        return Articles::find()->orderBy('date asc')->limit(4)->all();
    }

    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['article_id'=>'id']);
    }

    public function getArticleComments()
    {
        return $this->getComments()->where(['status'=>1])->all();
    }

    public function getAuthor()
    {
        return $this->hasOne(Users::className(), ['id'=>'user_id']);
    }

    public function viewedCounter()
    {
        $this->viewed += 1;
        return $this->save(false);
    }

    public function actionAllow($id)
    {
        $article = Articles::findOne($id);
        if($article->allow())
        {
            return $this->redirect(['index']);
        }
    }

    public function actionDisallow($id)
    {
        $article = Articles::findOne($id);
        if($article->disallow())
        {
            return $this->redirect(['index']);
        }
    }

}
