<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
//$con = mysqli_connect('localhost', 'root', '','test');

$servername = "LUXANNA\SHIFTTIMES";
$database = "employeehours";
$username = "sa";
$password = "usf15";

$con = mysqli_connect($servername, $username, $password, $database);

if(isset($_POST['checkIn']))
{

// get the post records
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
//$time1 = date('h:i:s A', strtotime($checkIn));
//$time2 = date('h:i:s A', strtotime($checkOut));
$employeenum = $_POST['employeenum'];

// database insert SQL code
$sql = "INSERT INTO `shifttimes` (Id, checkIn, checkOut, test) VALUES ('0', '$checkIn', '$checkOut', '$employeenum')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
 echo "Records Inserted";
}
}
else
{
 echo "Records Not Inserted";
}
?>
