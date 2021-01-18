<?php 
  $conn = mysqli_connect('localhost', 'root', '', 'ekhanei-sob');

  $name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$sql = "INSERT INTO contact(name,email,subject,message) VALUES ('$name','$email','$subject','$message')";

	if (!mysqli_query($conn, $sql)) { 
		echo "<h1>Error!</h1>";
	}
	else {
		echo "<h1>Data Stored to classDB!</h1>";
	}
?>