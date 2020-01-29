#!/usr/bin/env php
<?php

require_once(__DIR__.'/../vendor/autoload.php');

$container = new \Container\Container();

// ...

$command = new \RRSS\GetFollowersOfUser();
$followers = $command->execute('alfonso@email.com');

var_dump($followers);
