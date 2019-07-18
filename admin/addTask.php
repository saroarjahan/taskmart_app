<?php
include 'header.php';             
?>

<section class="reg" >
	<div class="register_student">
		<div class="container height">
		  <div class="row">
		  	<h3 class="Adpost">{{access}}</h3><br>
		    <div class="col-md-6 offset-md-3" v-if="adminLogin==='109346374245203627270'">
               <h3 class="Adpost">Add New Taks</h3><br>
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

					if (isset($_POST['submit'])) {
					  $title = $_POST["title"];
					  $description = $_POST["description"];
					  $url = $_POST["url"];
					  $reward= $_POST["reward"];

					  $sql = "INSERT INTO tasks (title,description,url,reward,image)
					  VALUES ('$title','$description','$url','$reward','http://taskmart.online/static/css/image/task.jpg')";

						if (mysqli_query($conn, $sql)) {
						    echo "<h3 id='success'>New record created successfully</h3>";
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

<script type="text/javascript">
	setTimeout(function(){ 
        var value=document.getElementById("success").innerHTML;
            if(value){window.location.href = 'http://'+location.hostname+'/admin/'; }         
        }, 3000);
</script>


<!--footer sestion-->

<?php
include 'footer.php';             
?>
