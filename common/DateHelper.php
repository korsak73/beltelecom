<?php

namespace app\common;

use Yii;
use DateTime;

class DateHelper
{
    const DATE_FORMAT = 'php:Y-m-d';
    const DATETIME_FORMAT = 'php:Y-m-d H:i:s';
    const TIME_FORMAT = 'php:H:i:s';

    public static function convert($dateStr, $type = 'date', $format = null)
    {
        if ($type === 'datetime') {
            $fmt = ($format == null) ? self::DATETIME_FORMAT : $format;
        } elseif ($type === 'time') {
            $fmt = ($format == null) ? self::TIME_FORMAT : $format;
        } else {
            $fmt = ($format == null) ? self::DATE_FORMAT : $format;
        }
        return Yii::$app->formatter->asDate($dateStr, $fmt);
    }

    public static function getDataRandom($date = false)
    {
        if ($date) {
            return date('d.m.Y');
        } else {
            return rand(99, 9999);
        }

    }

    public static function getYearsBetweenDates($date)
    {
        $d1 = new DateTime(self::convert($date));
        $d2 = new DateTime(date('Y-m-d'));
        $diff = $d2->diff($d1);

        return $diff->y;
    }

}