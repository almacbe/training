<?php


namespace Printer;

class Printer
{
    public function execute(Job $job)
    {
        $serialized = $job->toPostScript();

        $message = sprintf('Printing document... : %s', $serialized);

        echo $message . PHP_EOL;
    }
}
