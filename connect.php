<?php
		
	
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$Email=$_POST['email'];
	$Password=$_POST['password'];
	

	$connection= mysqli_connect('localhost','root','','mostakim');

	if (!$connection) {
		die( "not connected." . mysqli_error());
	}

	$query="INSERT INTO learn (first_name, last_name, email, password)
	VALUES ('$first_name','$last_name','$Email','$Password')";

		$result=mysqli_query($connection,$query);

		if ($result) {
			echo "success";
		}else{
			echo "failed";
		}
		


?>

