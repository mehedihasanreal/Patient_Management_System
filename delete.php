<?php
$con=mysqli_connect('localhost','root','','project');
$PN = $_GET['PN'];
$query = "DELETE FROM projectt WHERE PHONE_NUMBER='$PN'";
$data = mysqli_query($con, $query);
if($data)
{
	echo "deleted";
}
else
{
	echo "not deleted";
}
?>