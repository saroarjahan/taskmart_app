<!--Header sestion-->

<?php

include 'header.php';             

?>

<!--Main Body Event section-->

<section class="events">

	<div class="container main">
		<div class="row">
			<div class="col-md-3" v-for="data in info.data">
 				 <img :src="data.image">

 				 <h5 class="empty task_title">{{data.title}}</h5>
 				 	<div v-if="task_secretes.includes(data.secrete)">
					  <button class="btn btn-info" :id="complete">Taks Completed <i class="fas fa-check-double"></i></button>
					</div>
					<div v-else>
					  <a :href="data.URL"><button class="btn btn-danger">Click To Participate</button></a>
					</div>				  
			</div>    

    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include 'footer.php';             

?>

