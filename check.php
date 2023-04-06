<?php
$servername = "169.254.96.246:52428"; 

$username = "sa"; 

$password = "usf15"; 

$dbname = "employeehours; 

 

$conn = new mysqli($servername, $username, $password, $dbname); 

 

if ($conn->connect_error) { 

die("Connection failed: " . $conn->connect_error); 

}
?>
