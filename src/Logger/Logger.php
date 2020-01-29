<?php

namespace Logger;

class Logger
{
    public function logException(\Exception $e)
    {
        $logLine = $this->getMessage($e);
        $this->writeLog($logLine);
    }

    private function getMessage(\Exception $e)
    {
        $message = sprintf('Error code: %s with message %s', $e->getCode(), $e->getMessage());

        return $message;
    }

    private function writeLog($message)
    {
        echo $message.PHP_EOL;
    }
}
