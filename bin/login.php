#!/usr/bin/env php
<?php

require_once(__DIR__.'/../vendor/autoload.php');

use HandleExceptions\ErrorLogger;
use HandleExceptions\UsersLogin;

$usersLogin = new UsersLogin(new ErrorLogger());
$usersLogin->logIn();
