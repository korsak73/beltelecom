<?php

namespace app\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Articles;

/**
 * ArticlesSearch represents the model behind the search form of `app\models\Articles`.
 */
class ArticlesSearch extends Articles
{
    public $nameAuthor;

    public $categoryTitle;

//    public $human_publish_date;

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'author_id', 'status', 'viewed', 'is_featured'], 'integer'],
            [['nameAuthor', 'categoryTitle','category_id'], 'safe'],
            [['title', 'slug', 'description', 'content', 'publish_date', 'image', 'created_at', 'updated_at'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Articles::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $dataProvider->setSort([
            'attributes' => [
                'id',
                'nameAuthor' => [
                    'asc' => ['users.name' => SORT_ASC],
                    'desc' => ['users.name' => SORT_DESC],
                    'label' => 'Автор',
                    'default' => SORT_ASC
                ],
                'categoryTitle' => [
                    'asc' => ['categories.title' => SORT_ASC],
                    'desc' => ['categories.title' => SORT_DESC],
                    'label' => 'Категория',
                    'default' => SORT_ASC
                ],
            ]
        ]);

        $this->load($params);

        if (! $this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            $query->joinWith(['author']);
            $query->joinWith(['category']);

            return $dataProvider;
        }

//        $this->addCondition($query, 'nameAuthor', true);
//        $this->addCondition($query, 'id');
//        $this->addCondition($query, 'author_id');

        // фильтр по имени
//        $query->andWhere('nameAuthor LIKE "%' . $this->nameAuthor . '%" '
//        );
        $query->joinWith(['author' => function ($q) {
//            $q->where('users.name LIKE "%' . $this->nameAuthor . '%"');
            $q->andFilterWhere(['like', 'users.name', $this->nameAuthor]);
        }]);
        $query->joinWith(['category' => function ($q) {
            $q->andFilterWhere(['like', 'categories.title', $this->categoryTitle]);
        }]);

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
//            'category_id' => $this->category_id,
            'author_id' => $this->author_id,
            'articles.status' => $this->status,
            'publish_date' => $this->publish_date,
            'viewed' => $this->viewed,
            'is_featured' => $this->is_featured,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ]);

        $query->andFilterWhere([
            'in',
            'category_id',
            $this->category_id
        ]);

        $query->andFilterWhere(['like', 'title', $this->title])
            ->andFilterWhere(['like', 'slug', $this->slug])
            ->andFilterWhere(['like', 'description', $this->description])
            ->andFilterWhere(['like', 'content', $this->content])
            ->andFilterWhere(['like', 'image', $this->image]);

        if($this->created_at)
            $query->andFilterWhere(['between', 'created_at', strtotime($this->created_at), strtotime($this->created_at)+86400]);
        if($this->updated_at)
            $query->andFilterWhere(['between', 'updated_at', strtotime($this->updated_at), strtotime($this->updated_at)+86400]);

        return $dataProvider;
    }
}
