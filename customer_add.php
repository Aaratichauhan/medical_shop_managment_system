<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	CUSTOMER DETAILS
	</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/form4.css">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<?php include "header.php" ?>
	<?php include "sidenav.php" ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="head">
				<h2 style="text-align:center;"> ADD CUSTOMER DETAILS </h2>
			</div>
			<div class="one head">
				<div class="row">
				<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="column">
					<p>
						<label for="cid">Customer ID:</label><br>
						<input type="number" name="cid">
					</p>
					<p>
						<label for="cfname">First Name:</label><br>
						<input type="text" name="cfname">
					</p>
					<p>
						<label for="clname">Last Name:</label><br>
						<input type="text" name="clname">
					</p>
					<p>
						<label for="age">Age:</label><br>
						<input type="number" name="age">
					</p>
					<p>
						<label for="sex">Sex: </label><br>
						<select id="sex" name="sex">
							<option value="selected">Select</option>
							<option>Female</option>
							<option>Male</option>
							<option>Others</option>
						</select>
					</p>
				</div>
				<div class="column">
					<p>
						<label for="phno">Phone Number: </label><br>
						<input type="number" name="phno">
					</p>
					<p>
						<label for="emid">Email ID:</label><br>
						<input type="text" name="emid">
					</p>
				</div>
				<input type="submit" name="add" value="Add Customer">
			</form>
			<br>
			<?php
			include "config.php";
			if (isset($_POST['add'])) {
				$id = mysqli_real_escape_string($conn, $_REQUEST['cid']);
				$fname = mysqli_real_escape_string($conn, $_REQUEST['cfname']);
				$lname = mysqli_real_escape_string($conn, $_REQUEST['clname']);
				$age = mysqli_real_escape_string($conn, $_REQUEST['age']);
				$sex = mysqli_real_escape_string($conn, $_REQUEST['sex']);
				$phno = mysqli_real_escape_string($conn, $_REQUEST['phno']);
				$mail = mysqli_real_escape_string($conn, $_REQUEST['emid']);

				$sql = "INSERT INTO customer VALUES ($id, '$fname', '$lname',$age,'$sex',$phno, '$mail')";
				if (mysqli_query($conn, $sql)) {
					echo "<p style='font-size:8;'>Customer successfully added!</p>";
				} else {
					echo "<p style='font-size:8; color:red;'>Error! Check details.</p>";
				}
			}

			$conn->close();
			?>
				</div>
			</div>
			<?php include "footer.php" ?>
		</main>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>
