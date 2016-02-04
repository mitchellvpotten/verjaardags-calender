<?php
$con = mysqli_connect("localhost", "root", "", "calendar");
//$con = mysqli_connect("localhost", "mpotten_admin", "9nOjlltZr", "mpotten_database");

$person = $_POST['person'];
$day = $_POST['day'];
$month = $_POST['month'];
$year = $_POST['year'];
$id = $_POST['id'];

$sql = "UPDATE birthdays SET $person, $day, $month, $year WHERE id = '$id' ";
$query = mysqli_query($con, $sql);

header('Location: index.php');

?>
