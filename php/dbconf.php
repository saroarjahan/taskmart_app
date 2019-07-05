<?php

$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'localhost') !== false) {
	DEFINE('DB_SERVER', "localhost");
	DEFINE('DB_USER', "root");
	DEFINE('DB_PASS', '');
	DEFINE('DB_DATABASE', "taskmart");
} else {
	DEFINE('DB_SERVER', "localhost");
	DEFINE('DB_USER', '');
	DEFINE('DB_PASS', '');
	DEFINE('DB_DATABASE', '');
}
