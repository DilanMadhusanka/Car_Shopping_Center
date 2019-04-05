<?php 
	session_start();
	$conn = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($conn, 'contact_us');

	$name = $_POST['name'];
	$email = $_POST['email'];
	$address = $_POST['address'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$s = "select * from users where Name = '$name'";
	$result = mysqli_query($conn, $s);
	$num = mysqli_num_rows($result);

	if($num == 1) {
		echo '<div style="font-size:1.25em ;color:red; font-size: 50px; margin-top: 300px; margin-left: 450px;">Username Already Taken!</div>';
		echo '<div style="font-size:1.25em ; font-size: 30px; margin-left: 560px;">Back to previous page</div>';
	}

	else {
		$reg = "insert into users(Name , Email, Address, Subject, Message) values ('$name', '$email', '$address', '$subject', '$message')";
		mysqli_query($conn, $reg);
		$_SESSION['name'] = $name;
		header('location: home.php');
		//echo "Registration Succesfull!";
	}

 ?> 