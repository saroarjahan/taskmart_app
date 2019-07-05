<?php

include ("Db.php");
$db = new Db();


$participant_email = $db -> quote($_GET['email']);



$query = "SELECT * FROM participants WHERE email = $participant_email";
$result = $db -> select($query);

if($result === false) {
    $error = $db -> error();
    $array = array('success' => 'false','error' => $error);
    echo json_encode($array);
    die();
} 

if (count($result) == 0) {
    $result = $db -> query("INSERT INTO participants (email) VALUES (" . $participant_email . ")");
    
    if($result === false) {
        $error = $db -> error();
        $array = array('success' => 'false','error' => $error);
        echo json_encode($array);
        die();
    }
    
    $id = $db -> inserted_id();
    $array = array('success' => 'true', 'pid' => $id);
    echo json_encode($array);
    die();
    
    
} else {
    $array = array('success' => 'true', 'pid' => $result[0]["id"]);
    echo json_encode($array);
    die();
}