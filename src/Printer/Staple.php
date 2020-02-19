<?php

namespace Printer;

class Staple
{
    public function execute(Job $job)
    {
        $position = $job->getStaplePosition();

        $message = sprintf('Staple at position %s , %s', $position[0], $position[1]);

        echo $message . PHP_EOL;
    }
}
