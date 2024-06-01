<?php
// +------------------------------------------------------------------------+
// | // +------------------------------------------------------------------------+  
// +------------------------------------------------------------------------+
// | The Ultimate Video Sharing Platform
// | Copyright (c) 2021 Rubi Dev. All rights reserved.
// +------------------------------------------------------------------------+

// You can access the admin panel by using the following url: http://yoursite.com/admincp 

require 'assets/init.php';

if (IS_LOGGED == false || PT_IsAdmin() == false) {
	header("Location: " . PT_Link(''));
    exit();
}

// autoload admin panel files
require 'admin-panel/autoload.php';