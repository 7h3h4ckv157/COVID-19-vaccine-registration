<?php
// database connection code
if(isset($_POST['txtName']))
{
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root', '','db_service');

// get the post records

$txtName = $_POST['txtName'];
$txtAdh = $_POST['txtAdh'];

// database insert SQL code
$sql = "INSERT INTO `tbl_service` (`Id`, `fldName`, `fldAdh`) VALUES ('0', '$txtName', '$txtAdh')";

// insert in database 
$rs = mysqli_query($con, $sql);
if($rs)
{
	echo "Registered Succefully";
}
}
else
{
	echo "an error occured";
	
}
?>
