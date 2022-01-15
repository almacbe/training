<?php

namespace Tests;

use PHPUnit\Framework\TestCase;
use String\StringClass;
use String\StringIndexOutOfBoundsException;

class StringClassTest extends TestCase
{
    public function testShouldThrowExceptionIfBeginIndexIsLessThanZero()
    {
        $string = new StringClass('substring');

        $this->expectException(StringIndexOutOfBoundsException::class);

        $string->substring(-1, 2);
    }

    public function testShouldThrowExceptionIfBeginIndexIsGreaterThanBeginIndex()
    {
        $string = new StringClass('substring');

        $this->expectException(StringIndexOutOfBoundsException::class);

        $string->substring(3, 1);
    }

    public function testShouldThrowExceptionIfEndIndexIsGreaterThanTheLengthOfTheString()
    {
        $string = new StringClass('two');

        $this->expectException(StringIndexOutOfBoundsException::class);

        $string->substring(1, 4);
    }

    public function testShouldReturnTheWholeStringWhenTheSubstringIsTheSameSize()
    {
        $string = new StringClass('substring');

        $substring = $string->substring(0, 9);

        $this->assertEquals('substring', $substring);
    }

    public function dataProvider()
    {
        return [
            ['substring', 3, 9, 'string'],
            ['substring', 0, 1, 's'],
            ['substring', 0, 0, ''],
            ['substring', 9, 9, ''],
            ['substring', 2, 4, 'bs'],
        ];
    }

    /**
     * @dataProvider dataProvider
     */
    public function testShouldReturnTheSubstring(string $string, int $beginIndex, int $endIndex, string $expectedString)
    {
        $string = new StringClass($string);

        $substring = $string->substring($beginIndex, $endIndex);

        $this->assertEquals($expectedString, $substring);
    }
}
