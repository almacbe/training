#!/usr/bin/env php
<?php

require_once(__DIR__.'/../vendor/autoload.php');

$validator = new \IdentityDocument\IdentityNumberValidator();

$spanishId = new \IdentityDocument\SpanishIdentityDocument('12345678R');
echo sprintf('Is the id %s valid? %d', $spanishId->getNumber(), $validator->validate($spanishId)) . PHP_EOL;

$spanishId = new \IdentityDocument\SpanishIdentityDocument('53245678M');
echo sprintf('Is the id %s valid? %d', $spanishId->getNumber(), $validator->validate($spanishId)) . PHP_EOL;

$frenchId = new \IdentityDocument\FrenchIdentityDocument('180004321N');
echo sprintf('Is the id %s valid? %d', $frenchId->getNumber(), $validator->validate($frenchId)) . PHP_EOL;

$frenchId = new \IdentityDocument\FrenchIdentityDocument('987654321N');
echo sprintf('Is the id %s valid? %d', $frenchId->getNumber(), $validator->validate($frenchId)) . PHP_EOL;

try {
    $noId = new \IdentityDocument\GermanIdentityDocument('asdasd');
    $validator->validate($noId);
} catch (\IdentityDocument\InvalidDocumentTypeException $exception) {
    echo sprintf('The id "%s" is not supported!', get_class($noId)) . PHP_EOL;
}
