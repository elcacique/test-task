<?php

namespace app\modules\logger\components;


use app\modules\logger\interfaces\TargetInterface;

class Factory
{
    public static function getLoggerInstance($config): TargetInterface
    {
        return \Yii::createObject($config);
    }
}
