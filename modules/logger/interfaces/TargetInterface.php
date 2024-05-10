<?php

namespace app\modules\logger\interfaces;

interface TargetInterface
{
    public function send(string $message): void;
}
