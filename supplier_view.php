<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	SUPPLIER DETAILS
	</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/table1.css">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<?php include "header.php" ?>
	<?php include "sidenav.php" ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="head">
				<h2 style="text-align:center;"> VIEW SUPPLIER DETAILS </h2>
			</div>
			<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Supplier ID</th>
			<th>Company Name</th>
			<th>Address</th>
			<th>Phone Number</th>
			<th>Email Address</th>
			<th>Action</th>
		</tr>
		
	<?php
	
	include "config.php";
	$sql = "SELECT sup_id,sup_name,sup_add,sup_phno,sup_mail FROM suppliers";
	$result = $conn->query($sql);
	
	if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {

	echo "<tr>";
		echo "<td>" . $row["sup_id"]. "</td>";
		echo "<td>" . $row["sup_name"] . "</td>";
		echo "<td>" . $row["sup_add"]. "</td>";
		echo "<td>" . $row["sup_phno"]. "</td>";
		echo "<td>" . $row["sup_mail"]. "</td>";
		echo "<td align=center>";
		echo "<a class='button1 edit-btn' href=supplier_update.php?id=".$row['sup_id'].">Edit</a>";
		echo "<a class='button1 del-btn' href=supplier_delete.php?id=".$row['sup_id'].">Delete</a>";
		echo "</td>";
	echo "</tr>";
	}
	} 

	$conn->close();
	
	?>
	</table>
			<?php include "footer.php" ?>
		</main>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>
