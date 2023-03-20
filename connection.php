<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$con = mysqli_connect('localhost', 'root', '','test');

// get the post records
$checkIn = $_POST['checkIn'];
$checkOut = $_POST['checkOut'];

// database insert SQL code
$sql = "INSERT INTO `shifttimes` (`Id`, `checkIn`, `checkOut`) VALUES ('0', '$checkIn', '$checkOut')";

// insert in database 
$rs = mysqli_query($con, $sql);

if($rs)
{
 echo "Contact Records Inserted";
}

?>
