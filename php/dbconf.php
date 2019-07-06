<?php

$url = $_SERVER['SERVER_NAME'] . $_SERVER['REQUEST_URI'];
if (strpos($url,'localhost:3306') !== false) {
	DEFINE('DB_SERVER', "localhost");
	DEFINE('DB_USER', "snapkdlp_task");
	DEFINE('DB_PASS', 'Task1@!');
	DEFINE('DB_DATABASE', "snapkdlp_tasks");
} else {
	DEFINE('DB_SERVER', "localhost");
	DEFINE('DB_USER', 'snapkdlp_task');
	DEFINE('DB_PASS', 'Task1@!');
	DEFINE('DB_DATABASE', 'snapkdlp_tasks');
}






