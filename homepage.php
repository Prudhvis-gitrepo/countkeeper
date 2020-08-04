<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Homepage.</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<?php include 'navbar.css';
	include 'db_config.php';
	$query="SELECT * from topics";
	$result=mysqli_query($con,$query);

	echo '<br><table width="100%" id="mytable"><thead><tr>
		<th>No</th>
		<th>Topics</th>
		<th>Solved Count</th>
		<th>Add</th>
	</tr>
</thead>
<tbody>';
while($row=mysqli_fetch_assoc($result)){
	echo '<tr><td>'.$row['id'].'</td><td>'.$row['topic_name'].' </td><td>'.$row['count'].'</td><td><button class="addcountbtn">+</button></td></tr>';
}
echo '</tbody></table>';
mysqli_free_result($result);
mysqli_close($con);
	?>


</body>
</html>