#!/usr/bin/env php
<?php

use Container\Container;
use RRSS\GetFollowersOfUser;

require_once(__DIR__.'/../vendor/autoload.php');

$container = new Container();

// ...

$command = new GetFollowersOfUser();
$followers = $command->execute('alfonso@email.com');

var_dump($followers);
