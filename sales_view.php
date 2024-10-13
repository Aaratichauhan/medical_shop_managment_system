<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	SALES INVOICE
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
				<h2 style="text-align:center;"> SALES INVOICE DETAILS </h2>
			</div>
			<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Sale ID</th>
			<th>Customer ID</th>
			<th>Date and Time </th>
			<th>Sale Amount</th>
			<th>Employee ID</th>
		</tr>
		
	<?php
	include "config.php";
	
		$sql = "SELECT sale_id, c_id,s_date,s_time,total_amt,e_id FROM sales";
		$result = $conn->query($sql);
		if ($result->num_rows > 0) {
		
		while($row = $result->fetch_assoc()) {
			
			
		echo "<tr>";
			echo "<td>" . $row["sale_id"]. "</td>";
			echo "<td>" . $row["c_id"] . "</td>";
			echo "<td>" . $row["s_date"]."&nbsp;&nbsp;".$row["s_time"]."</td>";
			echo "<td>" . $row["total_amt"]. "</td>";
			echo "<td>" . $row["e_id"]. "</td>";
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
