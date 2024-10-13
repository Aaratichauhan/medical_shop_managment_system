<?php
include "config.php";

if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$qry1 = "SELECT * FROM meds WHERE med_id='$id'";
	$result = $conn->query($qry1);
	$row = $result->fetch_row();
}
?>
		

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	MEDICINE DETAILS
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
				<h2 style="text-align:center;"> UPDATE MEDICINE DETAILS </h2>
			</div>
			<div class="one head">
		<div class="row">
	<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
				<div class="column">
					<p>
						<label for="medid">Medicine ID:</label><br>
						<input type="number" name="medid" value="<?php echo isset($row[0]) ? $row[0] : ''; ?>" readonly>
					</p>
					<p>
						<label for="medname">Medicine Name:</label><br>
						<input type="text" name="medname" value="<?php echo isset($row[1]) ? $row[1] : ''; ?>">
					</p>
					<p>
						<label for="qty">Quantity:</label><br>
						<input type="number" name="qty" value="<?php echo isset($row[2]) ? $row[2] : ''; ?>">
					</p>
					<p>
						<label for="cat">Category:</label><br>
						<input type="text" name="cat" value="<?php echo isset($row[3]) ? $row[3] : ''; ?>">
					</p>
				</div>

				<div class="column">
					<p>
						<label for="sp">Price: </label><br>
						<input type="number" step="0.01" name="sp" value="<?php echo isset($row[4]) ? $row[4] : ''; ?>">
					</p>
					<p>
						<label for="loc">Location:</label><br>
						<input type="text" name="loc" value="<?php echo isset($row[5]) ? $row[5] : ''; ?>">
					</p>
				</div>

				<input type="submit" name="update" value="Update">
			</form>

			<?php
			include "config.php";

			if (isset($_POST['medname']) || isset($_POST['qty']) || isset($_POST['cat']) || isset($_POST['sp']) || isset($_POST['loc'])) {
				$id = $_POST['medid'];
				$name = $_POST['medname'];
				$qty = $_POST['qty'];
				$cat = $_POST['cat'];
				$price = $_POST['sp'];
				$lcn = $_POST['loc'];

				$sql = "UPDATE meds SET med_name='$name',med_qty='$qty',category='$cat',med_price='$price',location_rack='$lcn' where med_id='$id'";
				if ($conn->query($sql)){
					header("location: inventory_view.php");
					exit();
				}else{
					echo "<p style='font-size:8;color:red;'>Error! Unable to update.</p>";
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
