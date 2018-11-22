<?php
//$servername = "localhost";
//$username = "root";
//$password = "";
//$dbname = "ap_db";

//select $dbname;

// Create connection

//$conn = new mysqli($servername, $username, $password, $dbname);
$conn = new mysqli('localhost', 'root', '', 'ap_db');


// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  	
//echo "Connected successfully";

?>




