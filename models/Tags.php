<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\filters\HttpCache;
use yii\data\Pagination;

/**
 * This is the model class for table "tags".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 *
 * @property ArticlesTags[] $articlesTags
 */
class Tags extends BaseModel
{

    const STATUS_INACTIVE = 0;

    const STATUS_ACTIVE = 1;

    const STATUS_DRAFT = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tags';
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
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    static::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    static::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
            ],
            [
                'class' => HttpCache::className(),
                'only' => ['index'],
                'lastModified' => function ($action, $params) {
                    $q = new \yii\db\Query();
                    return $q->from('tags')->max('updated_at');
                },
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            ['status', 'default', 'value' => self::STATUS_INACTIVE],
            ['status', 'in', 'range' => [self::STATUS_INACTIVE, self::STATUS_DRAFT]],
//            [['status'], 'integer'],
            [['created_at', 'updated_at'], 'safe'],
            [['title', 'slug'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'title' => 'Title',
            'slug' => 'Slug',
            'status' => 'Статус',
            'created_at' => 'Создан',
            'updated_at' => 'Изменен',
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
    public function getStatusTag()
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
    /**
     * @return \yii\db\ActiveQuery
     */
//    public function getArticlesTags()
//    {
//        return $this->hasMany(ArticlesTags::className(), ['tag_id' => 'id']);
//    }

    /**
     * {@inheritdoc}
     * @return TagsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new TagsQuery(get_called_class());
    }

    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['id' => 'article_id'])
            ->viaTable('articles_tags', ['tag_id' =>  'id']);
    }

    public static function getAll()
    {
        return Tags::find()->all();
    }

    public static function getAllActive()
    {
        return Tags::find()->leftJoin('articles_tags', 'tags.id=articles_tags.tag_id')->andWhere(['tags.status' => self::STATUS_ACTIVE])->all();
    }

    public function isAllowed()
    {
        return $this->status;
    }

    public function allow()
    {
        $this->status = self::STATUS_ACTIVE;
        return $this->save(false);
    }

    public function disallow()
    {
        $this->status = self::STATUS_DRAFT;
        return $this->save(false);
    }

    public static function getTagById($id)
    {
        return self::find()->where(['id'=>$id])->one();
    }

    public static function getTagsByCategoryId($id)
    {
        $query = self::find()
            ->innerJoin('articles_tags', 'articles_tags.tag_id = tags.id')
            ->innerJoin('articles', 'articles.id = articles_tags.article_id')
            ->where(['articles.category_id' => $id])
            ->andWhere(['articles.status' => Articles::STATUS_ACTIVE])
            ->andWhere(['tags.status' => self::STATUS_ACTIVE])
            ->limit(10)
            ->all();
        return $query;
    }

}
