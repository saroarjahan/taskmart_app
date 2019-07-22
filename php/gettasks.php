<?php
header("Access-Control-Allow-Origin: *");
include ("Db.php");

$db = new Db();



$query = "SELECT * from tasks";

$result = $db -> select($query);


//encript secrete value
foreach($result as $key => $value)
{
  $result[$key]['secrete'] = $value['secrete']*2354;
}

if($result === false) {

    $error = $db -> error();

    error_log($error);

    return false;

}

echo json_encode($result);









?>