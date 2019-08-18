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
               	<form action="addTask.php" method="post" enctype="multipart/form-data">
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

					<input type="file" name="fileToUpload" id="fileToUpload"> JPG, JPEG, PNG & GIF
					<br>

					<div class="input-group mb-3">
						  <input type="submit" @click="addSubmit" class="form-control submit" placeholder="submit" name="submit" aria-describedby="basic-addon1">
					</div>
				</form>  

				<br>
				<?php
 
					include ("../php/db_connection.php");

					$title = $description = $url= "";
					$home_url=$_SERVER['HTTP_HOST'];
					$secrete=17359;
					$sql = "SELECT id FROM tasks";
					$result = $conn->query($sql);
					if ($result->num_rows > 0) {
					    // output data of each row
					    while($row = $result->fetch_assoc()) {
					        $id=$row["id"];
					    }
					}
					else{
						$id=0;
					}

					
                    //image upload 
				    $target_dir = "uploads/";
					$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
					$uploadOk = 0;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

					if (isset($_POST['submit'])) {
					  $title = $_POST["title"];
					  $description = $_POST["description"];
					  $url = $_POST["url"];
					  $id=$id+1;

					  $reward= $_POST["reward"];
					  $secrete=$id*$secrete;
					  // $secrete=substr($secrete, 0, 10);

					  
					// Check if image file is a actual image or fake image
				    $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
				    if($check !== false) {
				        // echo "File is an image - " . $check["mime"] . ".";
				        $uploadOk = 1;
				    } else {
				        echo "File is not an image.";
				        $uploadOk = 0;
				    }


					
				    $img='http://taskmart.online/admin/'.$target_file;

				    if ( $uploadOk==1 ) {
					  $sql = "INSERT INTO tasks (title,secrete,description,url,reward,image)
					  VALUES ('$title','$secrete','$description','$url','$reward','$img')";
					}

					if (mysqli_query($conn, $sql) && $uploadOk==1) {
							
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

					// Check if file already exists
					if (file_exists($target_file)) {
					    // echo "Sorry, file already exists.";
					    $uploadOk = 0;
					}
					// Check file size
					if ($_FILES["fileToUpload"]["size"] > 500000) {
					    echo "Sorry, your file is too large.";
					    $uploadOk = 0;
					}
					// Allow certain file formats
					if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
					&& $imageFileType != "gif" ) {
					    echo " * only JPG, JPEG, PNG & GIF files are allowed.";
					    $uploadOk = 0;
					}
					// Check if $uploadOk is set to 0 by an error
					if ($uploadOk == 0) {
					    // echo "Sorry, your file was not uploaded.";
					// if everything is ok, try to upload file
					} else {
					    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
					        echo "The file ". basename( $_FILES["fileToUpload"]["name"]). " has been uploaded.";
					    } else {
					        echo "Sorry, there was an error uploading your file.";
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
