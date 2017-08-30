<?php
	require_once("../keygen.php");
	$length = $_POST["length"];
	echo key_gen($length);
?>