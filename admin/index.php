<!--Header sestion-->

<?php
include 'header.php';             
?>

<!--Main Body Event section-->
<section class="events">

	<div class="container main">
		<div class="row" >
		  	<img class="warn" v-show="view" :src="warnimg">
			<br>
			<h3 class="Adpost" v-show="view">{{access}}</h3>
			<div class="col-md-3" v-for="data in info.data" v-if="adminLogin==='109346374245203627270'">

 				 <img :src="data.image">

 				 <h5 class="empty">{{data.title}}</h5>
 				 <spa class="sharetext">Return url:</span>
 				 <p class="share">{{url}}/completed/?task_secrete={{data.secrete/2354}}</p>

 				 <a :href="data.URL"><button class="btn btn-info">Participate</button></a> <a :href="url+'/admin/deleteTask.php?task_id='+data.id"><button class="btn btn-info btn-danger"><i class="far fa-trash-alt"></i> Delete</button></a>

			</div>    

    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include 'footer.php';             

?>

