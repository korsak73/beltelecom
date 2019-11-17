<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
//use yii\behaviors\SluggableBehavior;
//use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\Expression;

/**
 * This is the model class for table "subscriptions".
 *
 * @property int $id
 * @property string $email
 * @property string $token
 * @property string $created_at
 * @property string $updated_at
 */
class Subscriptions extends BaseModel
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'subscriptions';
    }

    public function behaviors()
    {
        return [
//            [
//                'class' => SluggableBehavior::className(),
//                'attribute' => 'message',
//                'immutable' => true,
//                'ensureUnique'=>true,
//            ],
//            [
//                'class' => BlameableBehavior::className(),
//                'createdByAttribute' => 'created_by',
//                'updatedByAttribute' => 'updated_by',
//            ],
            [
                'class' => TimestampBehavior::className(),
                'attributes' => [
                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
                ],
                // если вместо метки времени UNIX используется datetime:
//                 'value' => new Expression('NOW()'),
                'value' => function() { return date('U'); },
            ],
//            'timestamp' => [
//                'class' => 'yii\behaviors\TimestampBehavior',
//                'attributes' => [
//                    ActiveRecord::EVENT_BEFORE_INSERT => ['created_at', 'updated_at'],
//                    ActiveRecord::EVENT_BEFORE_UPDATE => ['updated_at'],
//                ],
//            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
//            [['created_at', 'updated_at'], 'safe'],
            [['email', 'token'], 'string', 'max' => 255],
//            [['token'], 'string', 'max' => 100],
            [['email'], 'required'],
            [['email'], 'email'],
            [['email'], 'trim'],
            [['email'], 'unique']
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'email' => 'Email',
            'token' => 'Время добавления',
            'created_at' => 'Created At',
            'updated_at' => 'Updated At',
        ];
    }

    /**
     * {@inheritdoc}
     * @return SubscriptionsQuery the active query used by this AR class.
     */
    public static function find()
    {
        return new SubscriptionsQuery(get_called_class());
    }
}
