#!/usr/bin/env php
<?php

use Logger\Logger;

require_once(__DIR__.'/../vendor/autoload.php');

$logger = new Logger();
$exception = new Exception('Ha petado la Base de datos.');
$logger->logException($exception);

$exception = new LogicException('Este valor no puede ser null');
$logger->logException($exception);
