<?php

if(isset($_POST['txtName']))
{

$con = mysqli_connect('localhost', 'root', '','db');
	
$txtName = $_POST['txtName'];
$txtAdh = $_POST['txtAdh'];
	
$sanitized_txtName = mysqli_real_escape_string($db, txtName);
$sanitized_txtAdh =  mysqli_real_escape_string($db, txtAdh);

$sql = "INSERT INTO `tbl_service` (`Id`, `fldName`, `fldAdh`) VALUES ('0', '$sanitized_txtName', '$sanitized_txtAdh')";

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
c
