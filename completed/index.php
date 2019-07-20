<!--Header sestion-->

<?php

include 'header.php';             

?>

<!--Main Body Event section-->

<section class="events">

	<div class="container main">
		<div class="row" >

			<div class="col-md-12" >

			<?php
				include ("db_connection.php");
				$task_secrete= $_GET['task_secrete'];
				echo "taskid:".$task_secrete;
				echo $userInfo['name']."<br>";
  				echo $userInfo['sub'];

			?>
			</div>    

    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include 'footer.php';             

?>

