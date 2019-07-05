<?php

include ("Db.php");
$db = new Db();


$taskid = $db -> quoteNum($_POST['task_id']);
$user_id = $db -> quote($_POST['user_id']);
$s1 = $db -> quote($_POST['S1']);
$s2 = $db -> quote($_POST['S2']);
$s3 = $db -> quote($_POST['S3']);
$s4 = $db -> quote($_POST['S4']);
$session_id = $db -> quote($_POST['session_id']);
$reward = "'0'";
$query = "SELECT reward FROM tasks WHERE id = $taskid";
$result = $db -> select($query);
if($result === false) {
    $error = $db -> error();
    error_log($error);
} else {
    $reward = $result[0]["reward"];
}

$client_info = array("ip" => $_SERVER['REMOTE_ADDR'], "useragent" => $_SERVER['HTTP_USER_AGENT'], "referer" => $_SERVER['HTTP_REFERER']);
$client_info = $db -> quote(json_encode($client_info));
	
$query = "";
$query = "INSERT INTO completed_tasks (task_id, user_id, reward, S1, S2, S3, S4, session_id, userAgent) VALUES (" . $taskid . "," . $user_id . "," . $reward . "," . $s1 . "," . $s2 . "," . $s3 . "," . $s4 . "," . $session_id . "," . $client_info . ")";
$result = $db -> query($query);
if($result === false) {
    $error = $db -> error();
    error_log($error);
    $array = array('success' => 'false','error' => $error, 'meta' => $query);
    echo json_encode($array);
} else {
    $last_id = $db->inserted_id();
    $array = array('success' => 'true', 'inserted_id' => $last_id);
    echo json_encode($array);
}



	
?>
