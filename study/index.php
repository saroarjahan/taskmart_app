<!--Header sestion-->

<?php

include '../common/header.php'; 
include '../auth/index.php';           

?>

<!--Main Body Event section-->

<section class="events">

	<div class="container main">
		<div class="row">
			<div class="col-md-3">
				<div  v-for="data in info.data">
					<div v-if="data.id==taskid">
	 				 <h5 class="empty task_title">{{data.title}}</h5>
	 				 <a target="_blank" :href="data.URL"><img :src="data.image"></a>
	 				 <p class="des maintaks">{{data.description}}</p>
	 				 	<div v-if="task_secretes.includes(data.secrete)">
						  <button class="btn btn-warning btn-block" :id="complete">Taks Completed <i class="fas fa-check-double"></i></button>
						</div>
						<div v-else>
						  <a target="_blank" :href="data.URL"><button class="btn btn-info btn-block">Click To Participate</button></a>
						</div>
					</div>
				</div>    
			</div>
    	</div>

    	<div class="row" v-for="data in info.data">
    		<div class="col-md-12">
    			<p v-if="data.id==taskid" class="inspiration">Please login to the system before completeting the task. We would like to  assign rewards to your account.</p>			
    		</div>
    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include '../common/footer.php';             

?>

