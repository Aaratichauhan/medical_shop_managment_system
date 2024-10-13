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
				<h2 style="text-align:center;"> UPDATE CUSTOMER DETAILS </h2>
			</div>
			<div class="one head">
		<div class="row">
		<?php
			include "config.php";
			if (isset($_GET['id'])) {
				$id = $_GET['id'];
				$qry1 = "SELECT * FROM customer WHERE c_id='$id'";
				$result = $conn->query($qry1);
				$row = $result->fetch_row();
			}

			if (isset($_POST['update'])) {
				$id = $_POST['cid'];
				$fname = $_POST['cfname'];
				$lname = $_POST['clname'];
				$age = $_POST['age'];
				$sex = $_POST['sex'];
				$phno = $_POST['phno'];
				$mail = $_POST['emid'];

				$sql = "UPDATE customer SET c_fname='$fname',c_lname='$lname',c_age='$age',c_sex='$sex',c_phno='$phno',c_mail='$mail' where c_id='$id'";
				if ($conn->query($sql))
					header("location:customer-view.php");
				else
					echo "<p style='font-size:8; color:red;'>Error! Unable to update.</p>";
			}

			?>
			<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="column">
					<p>
						<label for="cid">Customer ID:</label><br>
						<input type="number" name="cid" value="<?php echo $row[0]; ?>" readonly>
					</p>
					<p>
						<label for="cfname">First Name:</label><br>
						<input type="text" name="cfname" value="<?php echo $row[1]; ?>">
					</p>
					<p>
						<label for="clname">Last Name:</label><br>
						<input type="text" name="clname" value="<?php echo $row[2]; ?>">
					</p>
					<p>
						<label for="age">Age:</label><br>
						<input type="number" name="age" value="<?php echo $row[3]; ?>">
					</p>
					<p>
						<label for="sex">Sex: </label><br>
						<input type="text" name="sex" value="<?php echo $row[4]; ?>">
					</p>
				</div>
				<div class="column">
					<p>
						<label for="phno">Phone Number: </label><br>
						<input type="number" name="phno" value="<?php echo $row[5]; ?>">
					</p>
					<p>
						<label for="emid">Email ID:</label><br>
						<input type="text" name="emid" value="<?php echo $row[6]; ?>">
					</p>
				</div>
				<input type="submit" name="update" value="Update">
			</form>
		</div>
	</div>
	<?php include "footer.php" ?>
		</main>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>

