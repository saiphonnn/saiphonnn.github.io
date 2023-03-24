<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

if(isset($_POST['checkIn']))
{

// get the post records
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];
//$time1 = date('h:i:s A', strtotime($checkIn));
//$time2 = date('h:i:s A', strtotime($checkOut));
$test = $_POST['test'];

// database insert SQL code
$sql = "INSERT INTO `shifttimes` (Id, checkIn, checkOut, test) VALUES ('0', '$checkIn', '$checkOut', '$test')";

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
