<?php
if (!version_compare(PHP_VERSION, '5.4.0', '>=')) {
    exit("Required PHP_VERSION >= 5.4.0 , Your PHP_VERSION is : " . PHP_VERSION . "\n");
}
// +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+ 
// +------------------------------------------------------------------------+
// | The Ultimate Video Sharing Platform
// | Copyright (c) 2021 Rubi Dev. All rights reserved.
// +------------------------------------------------------------------------+
date_default_timezone_set('UTC');
session_start();
require('assets/includes/functions_general.php');
require('assets/includes/tables.php');
require('assets/includes/functions_one.php');