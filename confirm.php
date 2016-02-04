<?php
	$con = mysqli_connect("localhost", "root", "", "calendar");
//$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

if (mysqli_connect_errno()) {
		echo "no connection";
	}

if (isset($_POST['person'],$_POST['day'],$_POST['month'],$_POST['year'])){
	$person = $_POST['person'];
	$day = $_POST['day'];
	$month = $_POST['month'];
	$year = $_POST['year'];

	$sql = "INSERT INTO birthdays (person,day,month,year) VALUES ('$person', '$day', '$month', '$year')"; 
	$result = mysqli_query($con,$sql);
}
//$con->close();
?>

<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
</head>
<body>

<form action="index.php" method="post">
<?php
	header("Refresh: 5; url=index.php");
	echo 'data has been sent, You will return in about 5 seconds.';
?>
<input type="submit" value="or click here to go back">

</body>
</html>