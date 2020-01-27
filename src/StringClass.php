<?php

namespace Example;

class StringClass
{
    /**
     * @var string
     */
    private $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    public function substring(int $beginIndex, int $endIndex): string
    {
        if ($beginIndex < 0) {
            throw new StringIndexOutOfBoundsException($beginIndex);
        } else {
            // Again why this else block is used, this need not to write, see above correct implementation
            if ($endIndex > strlen($this->string)) {
                throw new StringIndexOutOfBoundsException($endIndex);
            } else {
                // This else is also not required
                $subLen = $endIndex - $beginIndex;
                if ($subLen < 0) {
                    throw new StringIndexOutOfBoundsException($subLen);
                }
            }

            return (($beginIndex == 0) && ($endIndex == strlen($this->string)))
                ? $this->string
                : substr($this->string, $beginIndex, $subLen);
        }
    }
}

class StringIndexOutOfBoundsException extends \Exception
{
    public function __construct($index)
    {
        $message = sprintf('Index out of bounds %s', $index);
        parent::__construct($message);
    }
}
