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
			<table class="table" v-if="adminLogin==='109346374245203627270'">
				<thead>
				<tr>
				  <th scope="col">#</th>
				  <th scope="col">User Id</th>
				  <th scope="col">User Name</th>
				  <th scope="col">Rewards</th>
				</tr>
				</thead>

					<tbody class="col-md-12" v-for="(data,key) in rewards.data" >
						<tr>
						  <th scope="row">{{key+1}}</th>
						  <td>{{data.user_id}}</td>
						  <td>Otto</td>
						  <td>{{data.reward}}</td>
						</tr>
					</tbody>	 

			</table>   

    	</div>

    </div>   	

</section>

<!--footer sestion-->

<?php

include 'footer.php';             

?>

