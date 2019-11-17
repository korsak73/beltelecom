<?php

namespace app\models;

use Yii;
use yii\behaviors\TimestampBehavior;
use yii\data\Pagination;
use yii\filters\HttpCache;

/**
 * This is the model class for table "categories".
 *
 * @property int $id
 * @property string $title
 * @property string $slug
 * @property string $created_at
 * @property string $updated_at
 *
 * @property Articles[] $articles
 */
class Categories extends BaseModel
{
    const STATUS_INACTIVE = 0;

    const STATUS_ACTIVE = 1;

    const STATUS_DRAFT = 2;

    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'categories';
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
                    return $q->from('categories')->max('updated_at');
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
            [['title', 'slug'], 'required'],
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
            'title' => 'Заглавие',
            'status' => 'Статус',
            'slug' => 'Slug',
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
     * Возвращает статус пользователя
     */
    public function getStatusCategory()
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
    public function getArticles()
    {
        return $this->hasMany(Articles::className(), ['category_id' => 'id']);
    }

    public function getArticlesCount()
    {
        return $this->getArticles()->count();
    }

    /**
     * {@inheritdoc}
     * @return CategoriesQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new CategoriesQuery(get_called_class());
    }

    public static function getAll()
    {
        return Categories::find()->all();
    }
    public static function getAllActive()
    {
        return Categories::find()->andWhere(['status' => self::STATUS_ACTIVE])->all();
    }

    public static function getCategoryById($id)
    {
        return Categories::find()->where(['id'=>$id])->one();
    }

    public static function getArticlesByCategory($id)
    {
        $query = Articles::find()->where(['category_id'=>$id]);
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
}
