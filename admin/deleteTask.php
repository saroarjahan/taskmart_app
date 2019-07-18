<?php
include 'header.php';             
?>

<section class="reg" >
	<div class="register_student">
		<div class="container height">
		  <div class="row">
		  	<h3 class="Adpost">{{access}}</h3><br>
		    <div class="col-md-6 offset-md-3" v-if="adminLogin==='109346374245203627270'">
               	
				<?php
 
					include ("../php/db_connection.php");
					$id= $_GET['task_id'];
					$sql = "DELETE FROM tasks WHERE id='$id'";

					if ($conn->query($sql) === TRUE) {
					    echo "<h3>Record deleted successfully</h3>";
					} else {
					    echo "Error deleting record: " . $conn->error;
					}

					$conn->close();
				?> 
		    </div>               
		  </div>
		</div>	
	</div>		
</section>
<script type="text/javascript">
	setTimeout(function(){ window.location.href = 'http://'+location.hostname+'/admin/'; }, 3000);
	
</script>


<!--footer sestion-->

<?php
include 'footer.php';             
?>
