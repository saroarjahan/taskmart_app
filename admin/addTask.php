<?php
include 'header.php';             
?>

<section class="reg" >
	<div class="register_student">
		<div class="container main">
		  <div class="row">
		  	<img class="warn" v-show="view" :src="warnimg">
			<br>
			<h3 class="Adpost" v-show="view">{{access}}</h3>
		    <div class="col-md-12" v-if="adminLogin==='109346374245203627270'">
               <h3 class="Adpostitle">Add New Task</h3><br>
               	<form action="addTask.php" method="post">
		    		<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
					  </div>
					  <input type="text" required class="form-control" placeholder="Title" name="title" aria-describedby="basic-addon1">
					</div>

					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
					  </div>
					  <input type="text" required class="form-control" placeholder="Description" name="description" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fas fa-file-signature"></i></span>
					  </div>
					  <input type="number" required class="form-control" placeholder="Reward" name="reward" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
					  <div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1"><i class="fa fa-globe" aria-hidden="true"></i></span>
					  </div>
					  <input type="text" required class="form-control" placeholder="Url" name="url" aria-describedby="basic-addon1">
					</div>
					<div class="input-group mb-3">
						  <input type="submit" @click="addSubmit" class="form-control submit" placeholder="submit" name="submit" aria-describedby="basic-addon1">
					</div>
				</form>  

				<br>
				<?php
 
					include ("../php/db_connection.php");

					$title = $description = $url= "";
					$home_url=$_SERVER['HTTP_HOST'];
					$secrete=198674312;
					$sql = "SELECT id FROM tasks";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        $secrete=$secrete*$row["id"];
					        $id=$row["id"];
					    }
					}
					else{
						$id=0;
					}
					if (isset($_POST['submit'])) {
					  $title = $_POST["title"];
					  $description = $_POST["description"];
					  $url = $_POST["url"];
					  $reward= $_POST["reward"];
					  $secrete=substr($secrete, 0, 10);

					  $sql = "INSERT INTO tasks (title,secrete,description,url,reward,image)
					  VALUES ('$title','$secrete','$description','$url','$reward','http://taskmart.online/static/css/image/task.jpg')";

						if (mysqli_query($conn, $sql)) {
							$id=$id+1;
						    echo "<h3 id='success'>New record created successfully</h3>";

						    echo "<p id='texttask'>Here, we have provided two different URL to your task. Firstly,  the 'Task completion url'. This is a secrete url which you will add to your task page (google form or  personal website)  as a secrete. You will set this url as a way so that it can be visible to the user only after the task is completed. Then user will visit the link and our system will give him rewards for completing your task </p>";

						    echo "<p id='texttask'>Secondly, the 'Task individual url'. You can share this url to anywhere you want to invite student/participant  to patricpate. You can send this url with your email or you can share it to your social network pages for attaract more participant.</p>";

							echo "<p id='find'>Task completion url : "."<span>"."http://".$home_url."/completed/?completion_code=".$secrete."</span>"."</p>";

						    echo "<p id='find'>Task individual url : "."<span>"."http://".$home_url."/study/?taskid=".$id."</span>"."</p>";

						    echo "<p id='find'>You can also find this two url for all of your create tasks <a href='http://$home_url/admin/'>here</a></p>";
						    
						} else {
						    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
						}
					}

					mysqli_close($conn);
				?> 
		    </div>               
		  </div>
		</div>	
	</div>		
</section>

<!-- <script type="text/javascript">
	setTimeout(function(){ 
        var value=document.getElementById("success").innerHTML;
            if(value){window.location.href = 'http://'+location.hostname+'/admin/'; }         
        }, 3000);
</script> -->


<!--footer sestion-->

<?php
include 'footer.php';             
?>
