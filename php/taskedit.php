
<form action="taskedit.php" method="post">
	Title: <input type="text" name="title"><br>
	Description: <input type="text" name="description"><br>
	url: <input type="text" name="url"><br>
	<input type="submit" name="submit">
</form>

<?php
 
include ("db_connection.php");

$title = $description = $url= "";

if (isset($_POST['submit'])) {
  $title = $_POST["title"];
  $description = $_POST["description"];
  $url = $_POST["url"];

  $sql = "INSERT INTO tasks (title,url)
  VALUES ('$title', '$url')";

	if (mysqli_query($conn, $sql)) {
	    echo "New record created successfully";
	} else {
	    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
}




mysqli_close($conn);
?>