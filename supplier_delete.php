<?php
	include "config.php";
	$sql="DELETE FROM suppliers where sup_id='$_GET[id]'";
	if ($conn->query($sql))
	header("location:supplier_view.php");
	else
	echo "error";
?>