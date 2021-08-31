<?php
$conn= mysqli_connect("localhost", "root","redhat","testform");
$delEmail=$_GET['email'];
$query = "DELETE FROM `test1` WHERE `Email` = '$delEmail'";

$data = mysqli_query($conn,$query);
if($data){
	echo "record deleted";
}
else{
	echo "Sorry delete process failed";
}
?>