<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	MEDICINE DETAILS
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
				<h2 style="text-align:center;"> VIEW MEDICINE DETAILS </h2>
			</div>
			<table align="right" id="table1" style="margin-right:100px;">
				<tr>
					<th>Medicine ID</th>
					<th>Medicine Name</th>
					<th>Quantity Available</th>
					<th>Category</th>
					<th>Price</th>
					<th>Location in Store</th>
					<th>Action</th>
				</tr>

				<?php
				include "config.php";

				$sql = "SELECT med_id, med_name,med_qty,category,med_price,location_rack FROM meds";
				$result = $conn->query($sql);
				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						echo "<tr>";
						echo "<td>" . $row["med_id"] . "</td>";
						echo "<td>" . $row["med_name"] . "</td>";
						echo "<td>" . $row["med_qty"] . "</td>";
						echo "<td>" . $row["category"] . "</td>";
						echo "<td>" . $row["med_price"] . "</td>";
						echo "<td>" . $row["location_rack"] . "</td>";
						echo "<td align=center>";

						echo "<a class='button1 edit-btn' href=inventory_update.php?id=" . $row['med_id'] . ">Edit</a>";

						echo "<a class='button1 del-btn' href=inventory_delete.php?id=" . $row['med_id'] . ">Delete</a>";

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