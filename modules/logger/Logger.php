<?php

namespace app\modules\logger;

use app\modules\logger\components\Factory;
use app\modules\logger\interfaces\LoggerInterface;

class Logger extends \yii\base\Module implements LoggerInterface
{
    public $loggers;
    public $defaultType;

    public function __construct($id, $parent, $config = [])
    {
        $defaultConfig = require __DIR__ . '/config.php';
        $config = array_merge($defaultConfig, $config);
        parent::__construct($id, $parent, $config);
    }

    /**
     * @param string $message
     * @return void
     */
    public function send(string $message): void
    {
        $config = $this->loggers[$this->defaultType];
        $target = Factory::getLoggerInstance($config);
        $target->send($message);
    }

    /**
     * @param string $message
     * @param string $loggerType
     * @return void
     * @throws \Exception
     */
    public function sendByLogger(string $message, string $loggerType): void
    {
        if (array_key_exists($loggerType, $this->loggers)) {
            $config = $this->loggers[$loggerType];
            $target = Factory::getLoggerInstance($config);
            $target->send($message);
        } else {
            throw new \Exception('Unavailable logger type');
        }
    }

    /**
     * @return string
     */
    public function getType(): string
    {
        return $this->defaultType;
    }

    /**
     * @param string $type
     * @return void
     * @throws \Exception
     */
    public function setType(string $type): void
    {
        if (array_key_exists($type, $this->loggers)) {
            $this->defaultType = $type;
        } else {
            throw new \Exception('Unavailable logger type');
        }
    }
}
