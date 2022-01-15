#!/usr/bin/env php
<?php

use IdentityDocument\FrenchIdentityDocument;
use IdentityDocument\GermanIdentityDocument;
use IdentityDocument\IdentityNumberValidator;
use IdentityDocument\InvalidDocumentTypeException;
use IdentityDocument\SpanishIdentityDocument;

require_once(__DIR__.'/../vendor/autoload.php');

$validator = new IdentityNumberValidator();

$spanishId = new SpanishIdentityDocument('12345678R');
echo sprintf('Is the id %s valid? %d', $spanishId->getNumber(), $validator->validate($spanishId)) . PHP_EOL;

$spanishId = new SpanishIdentityDocument('53245678M');
echo sprintf('Is the id %s valid? %d', $spanishId->getNumber(), $validator->validate($spanishId)) . PHP_EOL;

$frenchId = new FrenchIdentityDocument('180004321N');
echo sprintf('Is the id %s valid? %d', $frenchId->getNumber(), $validator->validate($frenchId)) . PHP_EOL;

$frenchId = new FrenchIdentityDocument('987654321N');
echo sprintf('Is the id %s valid? %d', $frenchId->getNumber(), $validator->validate($frenchId)) . PHP_EOL;

try {
    $noId = new GermanIdentityDocument('asdasd');
    $validator->validate($noId);
} catch (InvalidDocumentTypeException $exception) {
    echo sprintf('The id "%s" is not supported!', get_class($noId)) . PHP_EOL;
}
