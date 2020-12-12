<?php
		
	if(isset($_POST['submit'])){
	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$Email=$_POST['Email'];
	$Password=$_POST['Password'];
	

	$connection= mysqli_connect('localhost','root','','first');

	if (!$connection) {
		die( "not connected." . mysqli_error());
	}

	$query="INSERT INTO learn (firstName, lastName, email, password)";
	$query .="VALUES ('$first_name','$last_name','$Email','$Password')";

		$result=mysqli_query($connection,$query);

		if ($result) {
			echo "success";
		}else{
			echo "failed";
		}
	}	


?>

