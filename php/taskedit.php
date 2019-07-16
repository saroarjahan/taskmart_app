<form action="taskedit.php" method="post">
	Title: <input type="text" name="title"><br>
	Description: <input type="text" name="description"><br>
	Reward: <input type="number" name="reward"><br>
	Url: <input type="text" name="url"><br>
	<input type="submit" name="submit">
</form>

<?php
 
include ("db_connection.php");

$title = $description = $url= "";

if (isset($_POST['submit'])) {
  $title = $_POST["title"];
  $description = $_POST["description"];
  $url = $_POST["url"];
  $reward= $_POST["reward"];

  $sql = "INSERT INTO tasks (title,description,url,reward,image)
  VALUES ('$title','$description','$url','$reward','http://taskmart.online/static/css/image/task.jpg')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}

mysqli_close($conn);
?>