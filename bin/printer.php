#!/usr/bin/env php
<?php

require_once(__DIR__.'/../vendor/autoload.php');

$printer = new \Printer\Printer();
$staple = new \Printer\Staple();
$fax = new \Printer\Fax();

$job = new \Printer\Job();

$printer->execute($job);
$fax->execute($job);
$staple->execute($job);
