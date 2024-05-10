<?php

namespace app\modules\logger\models;

use app\modules\logger\interfaces\TargetInterface;

class EmailTarget implements TargetInterface
{
    public $email;

    public function send(string $message): void
    {
        // demo code
        echo "{$message} was sent via email\n";
    }
}
