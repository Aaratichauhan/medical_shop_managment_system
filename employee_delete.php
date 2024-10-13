<?php
	include "config.php";
	$sql="DELETE FROM employee where e_id='$_GET[id]'";
	if ($conn->query($sql))
	header("location:employee_view.php");
	else
	echo "error";
?>