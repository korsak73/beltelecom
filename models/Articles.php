<?php

namespace app\models;

use app\modules\statistics\behaviors\Stat;
use Yii;
use yii\behaviors\SluggableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\data\Pagination;
use yii\db\ActiveRecord;
use yii\filters\HttpCache;
use yii\helpers\ArrayHelper;

/**
 * This is the model class for table "articles".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $description
 * @property string $content
 * @property int $category_id
 * @property int $author_id
 * @property int $status
 * @property string $publish_date
 * @property int $viewed
 * @property int $is_featured
 * @property string $image
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Users $author
 * @property Categories $category
 * @property ArticlesTags[] $articlesTags
 * @property Comments[] $comments
 */
class Articles extends BaseModel
{
    const STATUS_INACTIVE = 0;

    const STATUS_ACTIVE = 1;

    const STATUS_DRAFT = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'articles';
    }

    public function behaviors()
    {
        return [
            'slug' => [
                'class' => 'app\common\behaviors\Slug',
                'in_attribute' => 'title',
                'out_attribute' => 'slug',
                'translit' => true
            ],
//            [
//                'class' => SluggableBehavior::className(),
//                'attribute' => 'title',
//                'immutable' => true,
//                'ensureUnique'=>true,
//                'slugAttribute' => 'slug',//поле которое используется как слаг
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => 'title',//заполнять при создании
//                    //ActiveRecord::EVENT_AFTER_UPDATE => 'surname'//заполнять при обновлении - если надо
//                ],
//            ],
//            [
//                'class' => BlameableBehavior::className(),
//                'createdByAttribute' => 'created_by',
//                'updatedByAttribute' => 'updated_by',
//            ],
//            [
//                'class' => TimestampBehavior::className(),
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
//                ],
//                // если вместо метки времени UNIX используется datetime:
////                 'value' => new Expression('NOW()'),
//            ],
            [
                'class' => HttpCache::className(),
                'only' => ['index'],
                'lastModified' => function ($action, $params) {
                 $q = new \yii\db\Query();
                        return $q->from('articles')->max('updated_at');
            },
            ],
            'timestamp' => [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                'value' => function() { return date('U'); },
            ],
            'image' => [
                'class' => 'rico\yii2images\behaviors\ImageBehave',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['title'], 'required'],
            [['title', 'description', 'slug', 'content'], 'string'],
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_INACTIVE, self::STATUS_DRAFT]],
//            [['publish_date'], 'DateTime','php:d-m-Y H:i:s'],
            [['publish_date'], 'date', 'format' => 'php:Y-m-d'],
            [['publish_date'],'default', 'value' =>date('Y-m-d')],
            [['title', 'image', 'url_path'], 'string', 'max' => 255],
//            [['slug'], 'safe'],
//            [['title', 'slug', 'content', 'publish_date'], 'required'],
//            [['description', 'content'], 'string'],
            [['category_id', 'author_id', 'status', 'viewed', 'is_featured', 'created_at', 'updated_at'], 'integer'],
//            [[ 'created_at', 'updated_at'], 'safe'],
//            [['title', 'slug', 'image'], 'string', 'max' => 255],
//            [['author_id'], 'exist', 'skipOnError' => true, 'targetClass' => Users::className(), 'targetAttribute' => ['author_id' => 'id']],
//            [['category_id'], 'exist', 'skipOnError' => true, 'targetClass' => Categories::className(), 'targetAttribute' => ['category_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Заголовок',
            'slug' => 'Slug',
            'description' => 'Описание',
            'content' => 'Содержание',
            'category_id' => 'Category ID',
            'author_id' => 'Автор',
            'status' => 'Статус',
            'publish_date' => 'Дата публикации',
            'viewed' => 'Просмотры',
            'is_featured' => 'Рекомендуемые',
            'image' => 'Картитнка',
            'url_path' => 'Видео',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
            'nameAuthor' => 'Автор'
        ];
    }

    public function getStatusList()
    {
        return [
            self::STATUS_INACTIVE => 'Не подтвержден',
            self::STATUS_ACTIVE => 'Активен',
            self::STATUS_DRAFT => 'Заблокирован'
        ];
    }

    /**
     * Возвращает статус
     */
    public function getStatusArticle()
    {
        switch ($this->status) {
            case self::STATUS_INACTIVE:
                return '<span class="label label-warning">'.$this->statusList[self::STATUS_INACTIVE].'</span>';
                break;
            case self::STATUS_ACTIVE:
                return '<span class="label label-success">'.$this->statusList[self::STATUS_ACTIVE].'</span>';
                break;
            case self::STATUS_DRAFT:
                return '<span class="label label-danger">'.$this->statusList[self::STATUS_DRAFT].'</span>';
                break;
        }
        return false;
    }

    public function afterFind() {
        parent::afterFind ();
        $this->publish_date=Yii::$app->formatter->asDate($this->publish_date);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAuthor()
    {
        return $this->hasOne(Users::className(), ['id' => 'author_id']);
    }

    public function getNameAuthor()
    {
        if(empty($this->author)) {
            return new Users();
        }

        return $this->author->name;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getCategory()
    {
        return $this->hasOne(Categories::className(), ['id' => 'category_id']);
    }

    public function getCategoryTitle() {
        if(empty($this->category)){
            return null;
        }

        return $this->category->title;
    }

    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getArticlesTags()
//    {
//        return $this->hasMany(ArticlesTags::className(), ['article_id' => 'id']);
//    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getComments()
    {
        return $this->hasMany(Comments::className(), ['article_id' => 'id']);
    }

    /**
     * {@inheritdoc}
     * @return ArticlesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new ArticlesQuery(get_called_class());
    }

    public function saveArticle()
    {
        $this->author_id = Yii::$app->user->id;
        return $this->save(false);
    }

    public function saveImage ($fileName) {
        $this->image = $fileName;

        return $this->save(false);
    }

    public function deleteImage()
    {
        $imageUploadModel = new ImageUpload;

        $imageUploadModel->deleteCurrentImage($this->image);
    }

    public function beforeDelete()
    {
        $this->deleteImage();

        return parent::beforeDelete(); // TODO: Change the autogenerated stub
    }

    public function getImage()
    {
        return $this->image ? '/uploads/' . $this->image : '/no-image.png';
    }

    public function saveCategory($category_id)
    {
//        $this->category_id = $category;
//
//        return $this->save(false);
        $category = Categories::findOne($category_id);

        if ($category != null) {

            $this->link('category', $category);

            return true;
        }

    }

    public function saveTags($tags)
    {
        if (is_array($tags)) {

            $this->clearCurrentTags();

            foreach ($tags as $tag_id) {
                $tag = Tags::findOne($tag_id);
                $this->link('tags', $tag);
            }
        }
    }

    public static function getAll($pageSize = 5)
    {
        $query = Articles::find()->where(['status' => self::STATUS_ACTIVE]);
        $countQuery = clone $query;
        $pagination = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => $pageSize]);
        $pagination->forcePageParam = false;
        // приводим параметры в ссылке к ЧПУ
        $pagination->pageSizeParam = false;
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['articles'] = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }

    public static function getPopular()
    {
        return Articles::find()->where(['status' => self::STATUS_ACTIVE])->orderBy('viewed desc')->limit(3)->all();
    }

    public static function getRecent()
    {
        return Articles::find()->where(['status' => self::STATUS_ACTIVE])->orderBy('created_at asc')->limit(3)->all();
    }

    public function getTags()
    {
        return $this->hasMany(Tags::className(), ['id' => 'tag_id'])
            ->viaTable('articles_tags', ['article_id' => 'id']);
    }

    public function getSelectedTags()
    {
        $selectedIds = $this->getTags()->select('id')->andWhere(['status' => self::STATUS_ACTIVE])->asArray()->all();
        return ArrayHelper::getColumn($selectedIds, 'id');
    }

    public function getCountTags()
    {
        return $this->getTags()->select('id')->asArray()->count();
    }

    public function getTagsByArticleId($id)
    {
        $rows = (new \yii\db\Query())
            ->select(['tags.id', 'tags.title'])
            ->from('articles')
            ->innerJoin('articles_tags', 'articles_tags.article_id = articles.id')
            ->innerJoin('tags', 'tags.id = articles_tags.tag_id')
            ->where(['articles.id' => $id])
            ->andWhere(['articles.status' => self::STATUS_ACTIVE])
            ->andWhere(['tags.status' => Tags::STATUS_ACTIVE])
            ->limit(10)
            ->all();
        return $rows;
    }
    public function getPopularByTag($id)
    {
        $query = Articles::find()
            ->select(['articles.*'])
            ->from('articles')
            ->innerJoin('articles_tags', 'articles_tags.article_id = articles.id')
            ->innerJoin('tags', 'tags.id = articles_tags.tag_id')
            ->where(['tags.id' => $id])
            ->andWhere(['articles.status' => self::STATUS_ACTIVE])
            ->orderBy('viewed desc')
            ->limit(3)
            ->all();

        return $query;
    }
    public function getPublishDate()
    {
        return Yii::$app->formatter->asDate($this->publish_date);
    }

    public function clearCurrentTags()
    {
        ArticlesTags::deleteAll(['article_id' => $this->id]);
    }

    public function getArticleComments()
    {
        return $this->getComments()->where(['status'=>1])->all();
    }

    public function viewedCounter()
    {
        $this->viewed += 1;
        return $this->save(false);
    }

    public function isAllowed()
    {
        return $this->status;
    }

    public function allow()
    {
        $this->status = self::STATUS_ACTIVE;
        $this->publish_date = date('Y-m-d H:i:s', strtotime($this->publish_date));
        return $this->save(false);
    }

    public function disallow()
    {
        $this->status = self::STATUS_DRAFT;
        $this->publish_date = date('Y-m-d H:i:s', strtotime($this->publish_date));
        return $this->save(false);
    }

    public static function getArticlesByTag($id)
    {
        $query = Articles::find()
            ->select(['articles.*'])
            ->innerJoin('articles_tags', 'articles.id=articles_tags.article_id')
            ->innerJoin('tags', 'tags.id=articles_tags.tag_id')
            ->andwhere(['tags.id' => $id])
            ->andwhere(['tags.status' => Tags::STATUS_ACTIVE])
            ->andwhere(['articles.status' => Articles::STATUS_ACTIVE])
            ->limit(10);

        $countQuery = clone $query;
        $pagination = new Pagination(['totalCount' => $countQuery->count(), 'pageSize' => 2]);
        $pagination->forcePageParam = false;
        // приводим параметры в ссылке к ЧПУ
        $pagination->pageSizeParam = false;
        $articles = $query->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        $data['articles'] = $articles;
        $data['pagination'] = $pagination;

        return $data;
    }
}
