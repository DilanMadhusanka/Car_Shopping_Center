<?php 
	session_start();
	if(!isset($_SESSION['name'])) {
		header('location:home.php');
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Home Page</title>
 	<style type="text/css">
 		*{
 			margin: 0;
 			padding: 0;
 		}

 		body {
 			margin: 0 auto;
 			text-align: center;
 			margin-top: 300px;
 		}

 		h1 {
 			background-color: #D41E61;
 			margin: 0px 500px 0px 500px;
 			font-size: 45px;
 			font-family: Arial;
 			border: 2px solid black;
 			border-radius: 5px;
 			padding: 10px 0px 10px 0px;
 			color: white;
 		}

 		a  button{
 			margin-top: 15px;
 			padding: 10px 20px 10px 20px;
 			font-size: 20px;
 			font-weight: bold;
 			background-color: white;
 			border-color: green;
 			border-radius: 5px;
 			color: black;
 			transition-duration: 0.4s;
 			cursor: pointer;
 		}

 		a button:hover {
 			background-color: green;
 		}
 	</style>
 </head>
 <body>
 	<h1>Login Success </h1>
 	<a href="index.php"><button><<</button></a>
 	<!--<?php //echo $_SESSION['username']; ?>-->
 </body>
 </html>

