	<?php
	//require_once('index.php');
	
	
	require_once('mysqlconnection.php');
	
		$name = $_GET['name']; 
		$pwd = $_GET['password'];
		$email = $_GET['email']; 
		$contact = $_GET['contact']; 
		$city = $_GET['city']; 
		$company = $_GET['company']; 		
		
		$sql = "INSERT INTO registration (name, pwd, email, contact, city, company) 
			VALUES ('$name', '$pwd', '$email', '$contact', '$city', '$company')";
				
	if ($conn->query($sql) === TRUE) 
	{
		echo "New record created successfully";
	} 
	else 
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	
	?>