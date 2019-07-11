<!--Header sestion-->

<?php

include 'header.php';             

?>

<!--Main Body Event section-->

<section class="events">

	<div class="container main">
		<div class="row" >

			<div class="col-md-3" v-for="data in info.data">

 				 <img :src="data.image">

 				 <h5 class="empty">{{data.title}}</h5>

 				 <a :href="data.URL+'?userID='+userId+'&taskID='+data.id"><button class="btn btn-info">Participate</button></a>

			</div>    

    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include 'footer.php';             

?>

