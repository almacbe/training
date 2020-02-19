<?php

namespace Printer;

class Fax
{
    public function execute(Job $job)
    {
        $serialized = $job->serializeForFax();

        $message = sprintf('Sending fax... : %s', $serialized);

        echo $message . PHP_EOL;
    }
}
