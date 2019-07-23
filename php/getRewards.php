<?php
header("Access-Control-Allow-Origin: *");
include ("Db.php");

$db = new Db();



$query = "SELECT * from completed_tasks";

$result = $db -> select($query);


//encript secrete value
foreach($result as $key => $value)
{
  $result[$key]['task_secrete'] = $value['task_secrete']*2354;
}

if($result === false) {

    $error = $db -> error();

    error_log($error);

    return false;

}

echo json_encode($result);









?>