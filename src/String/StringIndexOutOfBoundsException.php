<?php

namespace String;

class StringIndexOutOfBoundsException extends \Exception
{
    public function __construct($index)
    {
        $message = sprintf('Index out of bounds %s', $index);
        parent::__construct($message);
    }
}
