<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	CUSTOMER DETAILS
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
				<h2 style="text-align:center;"> VIEW CUSTOMER DETAILS </h2>
			</div>
			<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Customer ID</th>
			<th>First Name</th>
			<th>Last Name</th>
			<th>Age</th>
			<th>Sex</th>
			<th>Phone Number</th>
			<th>Email Address</th>
			<th>Action</th>
		</tr>
	<?php
	
	include "config.php";
	$sql = "SELECT c_id,c_fname,c_lname,c_age,c_sex,c_phno,c_mail FROM customer";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {

		echo "<tr>";
			echo "<td>" . $row["c_id"]. "</td>";
			echo "<td>" . $row["c_fname"] . "</td>";
			echo "<td>" . $row["c_lname"]. "</td>";
			echo "<td>" . $row["c_age"]. "</td>";
			echo "<td>" . $row["c_sex"] . "</td>";
			echo "<td>" . $row["c_phno"]. "</td>";
			echo "<td>" . $row["c_mail"]. "</td>";
			echo "<td align=center>";
				echo "<a class='button1 edit-btn' href=customer_update.php?id=".$row['c_id'].">Edit</a>";
				echo "<a class='button1 del-btn' href=customer_delete.php?id=".$row['c_id'].">Delete</a>";
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

