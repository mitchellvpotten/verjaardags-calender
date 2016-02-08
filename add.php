<!DOCTYPE html>
<html>
<head>
	<title>calendar</title>
</head>
<body>
	<form action="confirm.php" method="post">
	<input type="text" name="person" placeholder="naam"> 

	<select name="day">
<?php
  for ($i = 1; $i <= 31; ++$i) {

    // $day = strtotime(sprintf('-%d days',$i));
    // $value = date('d', $day);
    // $label = $value;
    printf('<option value="%s">%s</option>', $i, $i);
  }
  ?>
	</select>


	<select name="month">
<?php
  for ($i = 1; $i <= 12; ++$i) {
    // $time = strtotime(sprintf('-%d months',$i));
    // $value = date('m', $time);
    // $label = date('F ', $time);
    printf('<option value="%s">%s</option>', $i, $i);
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