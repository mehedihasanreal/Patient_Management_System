<?php
	$con=mysqli_connect('localhost','root','','project');
	if(!$con)
	{
		echo "yes";
	}
	$FIRST_NAME=$_POST['FN'];
	$LAST_NAME=$_POST['LN'];
	$GENDER=$_POST['G'];
	$AGE=$_POST['A'];
	$Email=$_POST['E'];
	$PHONE_NUMBER=$_POST['PN'];
	$sql="INSERT INTO projectt (FIRST_NAME, LAST_NAME, GENDER, AGE, EMAIL, PHONE_NUMBER) VALUES ('$FIRST_NAME','$LAST_NAME','$GENDER',$AGE,'$Email',$PHONE_NUMBER)";
	if(mysqli_query($con,$sql))
	{
		echo "You are successfully login";
	}
	else 
	{
		echo 'error'. mysqli_error($con). '<br>'. $sql;
	}
	mysqli_close($con);
?>