<style>
	td
	{
		padding: 10px;
	}
</style>
<?php
$con=mysqli_connect('localhost','root','','project');
$query = "SELECT * FROM projectt";
$data = mysqli_query($con,$query);
$total = mysqli_num_rows($data);

if($total != 0)
{
	?>
	<table>
		<tr>
			<th>FIRST_NAME</th>  
			<th>LAST_NAME</th>
			<th>GENDER</th>
			<th>AGE</th>
			<th>EMAIL</th>
			<th>PHONE_NUMBER</th>
			<th colspan="2">Operations</th>
		</tr>
 
	<?php
	while ($result = mysqli_fetch_assoc($data)) 
	{
		echo "<tr>
				<td>".$result['FIRST_NAME']."</td>
				<td>".$result['LAST_NAME']."</td>
				<td>".$result['GENDER']."</td>
				<td>".$result['AGE']."</td>
				<td>".$result['EMAIL']."</td>
				<td>".$result['PHONE_NUMBER']."</td>
				<td><a href='update.php?FN=$result[FIRST_NAME] &LN=$result[LAST_NAME] &G=$result[GENDER] &A=$result[AGE] &E=$result[EMAIL] &PN=$result[PHONE_NUMBER]'>Edit</a></td>
				<td><a href ='delete.php?FN=$result[FIRST_NAME] &LN=$result[LAST_NAME] &G=$result[GENDER] &A=$result[AGE] &E=$result[EMAIL] &PN=$result[PHONE_NUMBER]'>Delete</a></td>

			</tr> ";
	}
}
else
{
	echo "no record found";
}
?>
	</table>
