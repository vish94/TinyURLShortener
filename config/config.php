<?php

	if($_SERVER['HTTP_HOST']=="localhost") {
		defined('DB_SERVER') ? null : define('DB_SERVER', 'localhost');
		defined('DB_USER') ? null : define('DB_USER', 'root');
		defined('DB_PASS') ? null : define('DB_PASS', '');
		defined('DB_NAME') ? null : define('DB_NAME', 'tinyurl');
	} else {
		defined('DB_SERVER') ? null : define('DB_SERVER', 'yourdbserver');
		defined('DB_USER') ? null : define('DB_USER', 'yourusername');
		defined('DB_PASS') ? null : define('DB_PASS', 'yourpassword');
		defined('DB_NAME') ? null : define('DB_NAME', 'yourdbname');
	}

?>