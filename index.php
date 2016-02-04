<?php
	//$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");
    $con = mysqli_connect("localhost", "root", "", "calendar");
    error_reporting(0);
    if (mysqli_connect_errno()) {
		echo "no connection";
	}

    if (isset($_GET['delete']) and isset($_GET['id'])) {
    	$delete = $_GET['delete'];
    	$id = $_GET['id'];
    } else {
    	$delete = '';
    	$id = '';
    }

    if ($delete) {
    	mysqli_query($con, "DELETE FROM birthdays WHERE id = '$id'");
    }
	$sql = "SELECT * FROM birthdays";
	$result = mysqli_query($con, $sql)
	or die(mysqli_error($con));
	$output = mysqli_fetch_all($result, MYSQLI_ASSOC);

?>

<!doctype html> 

<html>
	<head>
		<title>Calendar</title>
     	<link href="style.css" rel="stylesheet" type="text/css">
	</head>
<body>
<h1>
<p><a href="add.php">+ Toevoegen</a></p>
	<?php foreach ($output as $data) {
		echo $data['person'] . "<br>";
		echo $data['day'] . "<br>";
		echo $data['month'] . "<br>";
		echo $data['year'] . "<br>";
	 ?>	<tr>
			<td><a href='index.php?delete=true&id=<?=$data['id']; ?>'> x </a><br></td>	
			<td><a href='wijzig.php?id=<?=$data['id']; ?>'>update</a><br></td>	
		</tr> 
		<?php } ?>
	<footer>&#169;2016 Mitchell van Potten</footer>
</h1>
</body>
</html>