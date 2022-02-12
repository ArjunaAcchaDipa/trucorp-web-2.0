<?php
	include_once("index.php");
	$total_user = $result->num_rows;

	echo "Total user: " . $total_user;
?>