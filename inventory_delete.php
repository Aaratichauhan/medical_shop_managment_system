<?php
include "config.php";
$sql = "DELETE FROM meds where med_id='$_GET[id]'";
if($conn->query($sql)){
	header("location:inventory_view.php");
}
else{
	echo "error";
}

mysqli_close($conn);

?>