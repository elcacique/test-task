<?php

namespace app\modules\logger\models;

use app\modules\logger\interfaces\TargetInterface;

class FileTarget implements TargetInterface
{
    public $path;

    public function send(string $message): void
    {
        // demo code
        echo "{$message} was sent via file\n";
    }
}
