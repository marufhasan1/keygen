<?php 
	require_once("keygen.php");

	$key = "";
	if (isset($_POST["gen"])) {
		$length = $_POST["length"];
		$key = key_gen($length);
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Random Number | Form</title>
</head>
	<body>
		<form action="" method="POST">
			<input type="number" autofocus="" name="length" id="" required>
			<input type="submit" name="gen" value="Genarte">
		</form>
		<p><?php echo $key; ?></p>
	</body>
</html>