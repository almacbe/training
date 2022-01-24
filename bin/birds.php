#!/usr/bin/env php
<?php

require_once(__DIR__.'/../vendor/autoload.php');

// Crea Patos, pajaros, loros

$birds = []; // list of birds;

while(true) {
    $choose = rand(0, count($birds));

    $bird = $birds[$choose];
    $bird->eat();
    $bird->walk();
    $bird->fly();

    sleep(1);
}
