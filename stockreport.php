<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	REPORT
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
				<h2 style="text-align:center;"> MEDICINES LOW ON STOCK(LESS THAN 50) </h2>
			</div>
			<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Medicine ID</th>
			<th>Medicine Name</th>
			<th>Quantity Available</th>
			<th>Category</th>
			<th>Price</th>
		</tr>
		
	<?php
	
	include "config.php";
	
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
	while($row = $result->fetch_assoc()) {

	echo "<tr>";
		echo "<td>" . $row["med_id"]. "</td>";
		echo "<td>" . $row["med_name"] . "</td>";
		echo "<td style='color:red;'>" . $row["med_qty"]. "</td>";
		echo "<td>" . $row["category"]. "</td>";
		echo "<td>" . $row["med_price"] . "</td>";
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