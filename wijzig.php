<?php

	$id = $_GET['id'];

	$con = mysqli_connect("localhost", "root", "", "calendar");
	//$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

if (mysqli_connect_errno()){
		echo "no connection";
}

	$sql = "SELECT * FROM birthdays WHERE id='$id'";
	$result = mysqli_query($con, $sql)
	or die(mysqli_error($con)); 	
	$output = mysqli_fetch_all($result);

//$con->close);

?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>Calendar</title>
</head>
<body>
	<h1>Wijzig hier uw invoer.<br></h1>
	<form method="post" action="update.php">
		<input type="hidden" name="id" value="<?= $id ?>">
		<input type="text" name="person" placeholder="naam"> 

		<select name="day">
<?php
	for ($i = 0; $i <= 30; ++$i) {
	    $day = strtotime(sprintf('-%d days',$i));
	    $value = date('d', $day);
	    $label = $value;
	    printf('<option value="%s">%s</option>', $value, $label);
	}
?>
		</select>

		<select name="month">
<?php
    for ($i = 0; $i <= 11; ++$i) {
    	$time = strtotime(sprintf('-%d months',$i));
	    $value = date('m', $time);
	    $label = date('F ', $time);
	    printf('<option value="%s">%s</option>', $value, $label);
    }
?>
		</select>

		<select name="year">
<?php
	for ($i = 0; $i <= 65; ++$i) {
		$year = strtotime(sprintf('-%d years',$i));
		$value = date('Y', $year);
		$label = $value;
		printf('<option value="%s">%s</option>', $value, $label);
	}
?>
		</select>
		<input type="submit" value="submit">
	</form>
</body>
</html>