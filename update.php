<?php
$con=mysqli_connect('localhost','root','','project');
$_GET['FN'];
$_GET['LN'];
$_GET['G'];
$_GET['A'];
$_GET['E'];
$_GET['PN'];
?>
<html>
<head>
	<title>Patient Information</title>
	<link rel="stylesheet" href="learning.css">
</head>
<body>
	<h3>Update Your Patient information</h3>
<div class="container">
	<form action="" method="GET">
    <label>FIRST NAME</label><br>
  	   <input type="text" name="FN" value="<?php echo $_GET['FN'];?>"><br><br>
  	<label>LAST NAME</label><br>
  	   <input type="text" name="LN" value="<?php echo $_GET['LN'];?>"><br><br>
  	<label>GENDER</label><br>
        <select name="G" value="<?php echo $_GET['G'];?>">
          <option>Male</option>
          <option>Female</option>
          <option>Other</option>
        </select><br><br>
    <label>AGE:(year)</label><br>
        <input type="number" name="A" value="<?php echo $_GET['A'];?>"><br><br>
    <label>E-MAIL:</label><br>
        <input type="email" name="E" value="<?php echo $_GET['E'];?>"><br><br>
    <label>PHONE NUMBER</label><br>
        <input type="number" name="PN" value="<?php echo $_GET['PN'];?>"><br><br>
  	<input type="submit" name="submit" value="Update"/>
	</form>
<?php
if(isset($_GET["submit"]))
{
	$FN=$_GET['FN'];
	$LN=$_GET['LN'];
	$G=$_GET['G'];
	$A=$_GET['A'];
	$E=$_GET['E'];
	$PN=$_GET['PN'];
	$query = "UPDATE projectt SET FIRST_NAME='$FN',LAST_NAME='$LN',GENDER='$G',AGE=$A,EMAIL='$E' WHERE PHONE_NUMBER=$PN";
	$data = mysqli_query($con,$query);
	if ($data)
	{
		echo "updated";
	}
	else
	{
		echo "not updated";
	}
}
else
{
	echo "Click here to update";
}
?> 
</div>

</body>
</html>
