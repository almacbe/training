<?php

namespace Tests;

use IdentityDocument\FrenchIdentityDocument;
use IdentityDocument\GermanIdentityDocument;
use IdentityDocument\IdentityNumberValidator;
use IdentityDocument\InvalidDocumentTypeException;
use IdentityDocument\SpanishIdentityDocument;
use PHPUnit\Framework\TestCase;

class IdentityDocumentTest extends TestCase
{
    public function spanishIdProvider()
    {
        return [
            '12345678R' => ['12345678R', true],
            '53245678M' => ['53245678M', false],
        ];
    }

    /**
     * @dataProvider spanishIdProvider
     */
    public function testValidSpanishIdentityDocument(string $id, bool $isValid)
    {
        $spanishId = new SpanishIdentityDocument($id);

        $validator = new IdentityNumberValidator();

        $this->assertEquals($isValid, $validator->validate($spanishId));
    }

    public function frenchIdProvider()
    {
        return [
            '180004321N' => ['180004321N', false],
            '987654321N' => ['987654321N', true],
        ];
    }

    /**
     * @dataProvider frenchIdProvider
     */
    public function testValidFrenchIdentityDocument(string $id, bool $isValid)
    {
        $frenchId = new FrenchIdentityDocument($id);

        $validator = new IdentityNumberValidator();

        $this->assertEquals($isValid, $validator->validate($frenchId));
    }

    public function testInvalidIdentityDocument()
    {
        $germanId = new GermanIdentityDocument('unsupported');

        $validator = new IdentityNumberValidator();

        $this->expectException(InvalidDocumentTypeException::class);

        $this->assertFalse($validator->validate($germanId));
    }
}
