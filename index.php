<?php

require_once "router.php";

route('/', function () {
    include 'home.php';
});

route('/about_us', function () {
    include 'about_us.php';
});
route('/for_researchers', function () {
    include 'for_researchers.php';
});
route('/Findings_&_Data_Sets', function () {
    include 'Findings_&_Data_Sets.php';
});
$action = $_SERVER['REQUEST_URI'];


if (strpos($action, 'code') !== false) {
    $action='/';
}
dispatch($action);