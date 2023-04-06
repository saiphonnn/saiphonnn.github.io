<?php
$servername = "169.254.96.246:52428"; 
$username = "sa"; 
$password = "usf15"; 
$dbname = "employeehours; 

$conn = mysqli($servername, $username, $password, $dbname); 

//if ($conn->connect_error) { 
//die("Connection failed: " . $conn->connect_error); 
//}

if($con->connect_errno){
    die('Error ' . $this->con->connect_error);
}
echo 'Connected successfully!';
?>
