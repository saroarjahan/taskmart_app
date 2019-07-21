<!--Header sestion-->

<?php

include 'header.php';             

?>

<!--Main Body putprogress section-->

<section class="events">

	<div class="container main">
		<div class="row" >

			<div class="col-md-12" >

			<?php
				include ("../php/db_connection.php");
				//gettask secrate id, user id
				$task_secrete = $_GET['task_secrete'];
				$user_name = $userInfo['name'];
  				$user_id = $userInfo['sub'];

  				//gettask reward with corresponding secrate id
  				$sql = "SELECT secrete, reward FROM tasks";			
  				$result = $conn->query($sql);

				if ($result->num_rows > 0) {
				    while($row = $result->fetch_assoc()) {
				    	if($task_secrete == $row["secrete"]){
				    		$reward = $row["reward"];
				    	}		        
				    }
				} 

				//Check already same task_secrete enter twice for same user_id
				$sql_check = "SELECT task_secrete, user_id FROM completed_tasks";			
  				$result_check = $conn->query($sql_check);

				if ($result_check->num_rows > 0) {
				    while($row = $result_check->fetch_assoc()) {
				    	if($task_secrete == $row["task_secrete"] && $user_id == $row["user_id"] ){
				    		$check = "exist";
				    		echo "<h3>Secrete Id already Used !!!</h3>";
				    	}	        
				    }
				}

				//insert user id, user_name, reward and task_secrete to completed_task database
				if (!empty($reward) && $check!="exist") {
					$sql_insert = "INSERT INTO completed_tasks (task_secrete, user_id, reward)
					VALUES ('$task_secrete', '$user_id', '$reward')";

					if ($conn->query($sql_insert) === TRUE) {
					    echo "New record created successfully";
					} else {
					    echo "Error: " . $sql . "<br>" . $conn->error;
					}
				}else{
					echo "<h3>Secrete Id is not valid!!!</h3>";
				}

				$conn->close();

			?>
			</div>    

    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include 'footer.php';             

?>

