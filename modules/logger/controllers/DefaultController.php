<?php

namespace app\modules\logger\controllers;

class DefaultController
{
    /**
     * Sends a log message to the default logger.
     */
    public function log()
    {
        $logger = \Yii::$app->getModule('logger');
        $logger->send('Message from log action');
    }

    /**
     * Sends a log message to a special logger.
     * @param string $type
     */
    public function logTo(string $type)
    {
        $logger = \Yii::$app->getModule('logger');
        $logger->sendByLogger("Message from logTo {$type} action", $type);
    }

    /**
     * Sends a log message to all loggers.
     */
    public function logToAll()
    {
        $module = \Yii::$app->getModule('logger');
        foreach ($module->loggers as $type => $config) {
            $logger = LoggerFactory::getLoggerInstance($config);
            $logger->send('Massage from logToAll action');
        }
    }
}
