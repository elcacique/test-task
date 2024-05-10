<?php

namespace app\modules\logger\models;

use app\modules\logger\interfaces\TargetInterface;
use yii\base\Configurable;

class DbTarget implements TargetInterface, Configurable
{
    public function send(string $message): void
    {
        // demo code
        echo "{$message} was sent via db\n";
    }
}
