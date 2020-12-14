<h1>This is your profile</h1>
<?php

session_start();

$connection= mysqli_connect('localhost','root','','mostakim');
if (!$connection) {
	die("coneection failed" . mysqli_error());
}
$email = $_SESSION["email"]; 

$sql = " SELECT * FROM learn WHERE email ='$email' ";

$result =$connection->query($sql);

if ($result->num_rows > 0) {
 
    while($row = $result->fetch_assoc()) {
      
        ?>

		<table border="1">
			<tr>
				<th>id</th>
				<th>first_name</th>
				<th>last_name</th>
				<th>email</th>
				<th>password</th>
			</tr>
			
            <tr>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['first_name']; ?></td>
                <td><?php echo $row['last_name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['password']; ?></td>
                
            </tr>
		</table>
		<?php

	}
} else{
	echo "0 results";
}

