<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
		PURCHASE DETAILS
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
				<h2 style="text-align:center;"> VIEW PURCHASE DETAILS </h2>
			</div>
			<table align="right" id="table1" style="margin-right:100px;">
				<tr>
					<th>Purchase ID</th>
					<th>Supplier ID</th>
					<th>Medicine ID</th>
					<th>Medicine Name</th>
					<th>Quantity</th>
					<th>Cost of Purchase</th>
					<th>Date of Purchase</th>
					<th>Manufacturing Date</th>
					<th>Expiry Date</th>
					<th>Action</th>
				</tr>

				<?php

				include "config.php";
				$sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date,mfg_date,exp_date FROM purchase";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						$sql1 = "SELECT med_name from meds where med_id=" . $row["med_id"] . "";
						$result1 = $conn->query($sql1);

						while ($row1 = $result1->fetch_assoc()) {

							echo "<tr>";
							echo "<td>" . $row["p_id"] . "</td>";
							echo "<td>" . $row["sup_id"] . "</td>";
							echo "<td>" . $row["med_id"] . "</td>";
							echo "<td>" . $row1["med_name"] . "</td>";
							echo "<td>" . $row["p_qty"] . "</td>";
							echo "<td>" . $row["p_cost"] . "</td>";
							echo "<td>" . $row["pur_date"] . "</td>";
							echo "<td>" . $row["mfg_date"] . "</td>";
							echo "<td>" . $row["exp_date"] . "</td>";
							echo "<td align=center>";
							echo "<a class='button1 edit-btn' href=purchase_update.php?pid=" . $row['p_id'] . "&sid=" . $row['sup_id'] . "&mid=" . $row['med_id'] . ">Edit</a>";
							echo "<a class='button1 del-btn' href=purchase_delete.php?pid=" . $row['p_id'] . "&sid=" . $row['sup_id'] . "&mid=" . $row['med_id'] . ">Delete</a>";
							echo "</td>";
							echo "</tr>";
						}
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

