#!/usr/bin/env php
<?php

use Printer\Fax;
use Printer\Job;
use Printer\Printer;
use Printer\Staple;

require_once(__DIR__.'/../vendor/autoload.php');

$printer = new Printer();
$staple = new Staple();
$fax = new Fax();

$job = new Job();

$printer->execute($job);
$fax->execute($job);
$staple->execute($job);
