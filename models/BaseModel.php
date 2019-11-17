<?php

namespace app\models;

use Yii;
use yii\db\ActiveRecord;
use yii\helpers\ArrayHelper;

class BaseModel extends ActiveRecord
{
    /**
     * @return mixed
     */
    public function __toString()
    {
        return $this->toString();
    }

    /**
     * @return BaseModel|mixed
     */
    public function toString()
    {
        if ( method_exists($this,'getName') ) {
            return $this->getName();
        }

        if ( property_exists($this,'name') ) {
            return $this->name;
        }

        return '';
    }

    /**
     * @param $field
     * @param $format
     */
    public function getDateTime($field, $format = 'yyyy-MM-dd HH:mm')
    {
        if ($this->$field) {
            $dateTime = new \DateTime($this->$field);
            return Yii::$app->formatter->asDate($dateTime,$format);
        }
        return null;
    }

//    /**
//     * @return string
//     * @throws \ReflectionException
//     */
//    public function getAlias()
//    {
//        if (property_exists($this, 'alias')) {
//            return $this->alias;
//        }
//        return (new \ReflectionClass($this))->getShortName();
//    }

    /**
     * @return mixed
     * @throws \yii\base\InvalidConfigException
     */
    public function getTargetModel()
    {
        $aliases = [
            'Client' => 'app\models\Client' // TODO: move to aliases
        ];

        if ( isset($this->target_id) && isset($this->target_model) ) {
            $model = Yii::createObject([
                'class' => $aliases[$this->target_model],
            ]);
            return $model::findOne($this->target_id);
        }
    }

    public static function getQuery()
    {
        return static::find();
    }

    public static function getQueryActive(){
        $query = static::getQuery();
        $query->where([
            'status' => static::STATUS_ACTIVE
        ]);
        return $query;
    }

    public static function getAllActive() {
        return static::getQueryActive()->all();
    }

    public static function getAllActiveArray($from, $to) {
        $items = static::getAllActive();
        return ArrayHelper::map($items, function($item) use($from) {
            return $item->$from;
        }, function($item) use ($to){
            return $item->$to;
        });
    }
}