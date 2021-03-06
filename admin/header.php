<!DOCTYPE html>

<html>

<head>

	<title>Task Mart</title>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

	<link rel="shortcut icon" type="image/png" href="../static/css/image/logo.jpg"/>

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>

    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

    <link rel="stylesheet" type="text/css" href="../static/css/style.css"> 

    <!--vue.js source-->

	<script src="https://cdn.jsdelivr.net/npm/vue/dist/vue.js"></script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.18.0/axios.js"></script>

	<!--Map-->

</head>

<body class="login">
	<div id="appEvents">

	<!--Navigation-->

	<div class="nav-back">

		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">

		  <a class="navbar-brand logo" href="./"><img src="../static/css/image/logo.png"></a>

		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

		    <span class="navbar-toggler-icon"></span>

		  </button>

		  <div class="collapse navbar-collapse" id="navbarSupportedContent">

		    <ul class="navbar-nav nav mr-auto mt-2 mt-lg-0">

			      <li class=" nav-item">
			        <a class="nav-link" href="./">All Tasks</a>
			      </li>

			      <li class="nav-item">
			        <a class="nav-link" href="addTask.php">Add Tasks</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="rewards.php">Participant Rewards</a>
			      </li>
			</ul>

		    <ul id="myDIV" class="log hide">
			        <i v-show="avatar" class="fas fa-user-alt"></i> <img v-show="imageShow" :src="userImage"><a class="nav-link disabled adlog" :href="loginUrl_admin">{{loginStatus}}</a>
		    </ul>

		  </div>

		</nav>

    </div>


<?php

include '../auth/index.php';             

?>