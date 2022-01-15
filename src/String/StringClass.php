<?php

namespace String;

class StringClass
{
    private string $string;

    public function __construct(string $string)
    {
        $this->string = $string;
    }

    /**
     * @throws StringIndexOutOfBoundsException
     */
    public function substring(int $beginIndex, int $endIndex): string
    {
        if ($beginIndex < 0) {
            throw new StringIndexOutOfBoundsException($beginIndex);
        } else {
            if ($endIndex > strlen($this->string)) {
                throw new StringIndexOutOfBoundsException($endIndex);
            } else {
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
