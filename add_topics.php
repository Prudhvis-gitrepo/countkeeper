<?php include 'db_config.php';
if(isset($_GET['submit'])){
	echo '<h1>hi</h1>';
	$topic_name=$_GET['topic_name'];
	$topic_count=$_GET['topic_count'];
	$query="SELECT * from topics where topic_name='$topic_name";
	$result=mysqli_query($con,$query);
	if(mysqli_num_rows($result)==0){
		mysqli_free_result($result);
		$query="INSERT into topics(topic_name,count) values('$topic_name','$topic_count')";
		$result=mysqli_query($con,$query);
		if($result){
			header("Location: homepage.php");
		}
		else{
			echo 'Inserting into topics failed'.mysqli_connect_error();
		}
		mysqli_free_result($result);
		mysqli_close($con);
	}
	else{
		echo "<script>alert('Already exists')</script>";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<title>Add Topics</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
	<?php include 'navbar.css';
	?>
	<br>
	<form action="" method="get">
		<label for="topic_name">Topic Name:</label>
		<input type="text" id="topic_name" name="topic_name">
		<br><br>
		<label for="topic_count">No of Solved:</label>
		<input type="number" id="topic_count" name="topic_count" min="0" value="0"><br><br>
		<input type="submit" name="submit" class="submit" value="submit">
		<input type="reset" name="reset">
	</form>
</body>
</html>