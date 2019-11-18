<?php 
require 'connection.php';
// -----getting data from form input fields------
	$name = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['InputEmail'];
// ---------------

	if(isset($_POST['add_post'])) // add data to the database
	{
		mysqli_query($db, "INSERT INTO users (first_name, last_name, email) VALUES ('$name', '$lastname', '$email')");
		mysqli_close($db);
	}

	if (isset($_POST['remove_post'])) {
		$name = $_POST['fname'];
	$lastname = $_POST['lname'];
	$email = $_POST['InputEmail'];
		$q = mysqli_query($db, " DELETE FROM users WHERE (first_name = '$name' and last_name = '$lastname' and email = '$email')   ") or die('Error querying database.');
	}
?>