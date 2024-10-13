<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
		EMPLOYEE DETAILS
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
				<h2 style="text-align:center;"> VIEW EMPLOYEE DETAILS </h2>
			</div>
			<table align="right" id="table1" style="margin-right:20px;">
				<tr>
					<th>Employee ID</th>
					<th>First Name</th>
					<th>Last Name</th>
					<th>Date of Birth</th>
					<th>Age</th>
					<th>Sex</th>
					<th>Employee Type</th>
					<th>Date of Joining</th>
					<th>Salary</th>
					<th>Phone Number</th>
					<th>Email Address</th>
					<th>Home Address</th>
					<th>Action</th>
				</tr>

				<?php

				include "config.php";
				$sql = "SELECT e_id, e_fname, e_lname, bdate, e_age, e_sex, e_type, e_jdate, e_sal, e_phno, e_mail, e_add FROM employee where e_id<>1";
				$result = $conn->query($sql);

				if ($result->num_rows > 0) {

					while ($row = $result->fetch_assoc()) {

						echo "<tr>";
						echo "<td>" . $row["e_id"] . "</td>";
						echo "<td>" . $row["e_fname"] . "</td>";
						echo "<td>" . $row["e_lname"] . "</td>";
						echo "<td>" . $row["bdate"] . "</td>";
						echo "<td>" . $row["e_age"] . "</td>";
						echo "<td>" . $row["e_sex"] . "</td>";
						echo "<td>" . $row["e_type"] . "</td>";
						echo "<td>" . $row["e_jdate"] . "</td>";
						echo "<td>" . $row["e_sal"] . "</td>";
						echo "<td>" . $row["e_phno"] . "</td>";
						echo "<td>" . $row["e_mail"] . "</td>";
						echo "<td>" . $row["e_add"] . "</td>";
						echo "<td align=center>";
						echo "<a class='button1 edit-btn' href=employee_update.php?id=" . $row['e_id'] . ">Edit</a>";
						echo "<a onclick='return confirm('Are you sure to delete?');' class='button1 del-btn' href=employee_delete.php?id=" . $row['e_id'] . ">Delete</a>";
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

