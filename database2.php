<?php
include_once 'connection.php';
$result = mysqli_query($conn,"SELECT * FROM testdata" where email='$email');
?>
<!DOCTYPE html>
<html>
 <head>
   <title> Retrive data</title>
 </head>
<body>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<table>
	  <tr>
	    <td>fname</td>
		<td>lame</td>
		<td>age</td>
		<td>email</td>
		<td>phone</td>
		<td>hobbies</td>	
		<td>gender</td>
		<td>state</td>
		<td>country</td>
		<td>file</td>
	

	  </tr>
			<?php
			$i=0;
			while($row = mysqli_fetch_array($result)) {
			?>
	  <tr>
	    <td><?php echo $row["fname"]; ?></td>
		<td><?php echo $row["lname"]; ?></td>
		<td><?php echo $row["age"]; ?></td>
		<td><?php echo $row["email"]; ?></td>
		<td><?php echo $row["phone"]; ?></td>
		<td><?php echo $row["hobbies"]; ?></td>
		<td><?php echo $row["gender"]; ?></td>
		<td><?php echo $row["state"]; ?></td>
		<td><?php echo $row["country"]; ?></td>
		<td><?php echo $row["file"]; ?></td>

		<td><a href="testshow.php?id=<?php echo $row["email"]; ?>">Update</a></td>
      </tr>
			<?php
			$i++;
			}
			?>
</table>
 <?php
}
else
{
    echo "No result found";
}
?>
 </body>
</html>