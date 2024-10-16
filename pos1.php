<?php

session_start();

?>

<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
		NEW SALES
	</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/form3.css">
	<link rel="stylesheet" type="text/css" href="css/table2.css">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<?php include "header.php" ?>
	<?php include "sidenav.php" ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="head">
				<h2 style="text-align:center;"> POINT OF SALE </h2>
			</div>
			<div class="one head">
				<div class="row">
					<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
						<center>

							<select id="cid" name="cid">
								<option value="0" selected="selected">*Select Customer ID (only once for a customer's sales)</option>

								<?php

								include "config.php";
						
								$qry = "SELECT c_id FROM customer";
								$result = $conn->query($qry);
								echo mysqli_error($conn);
								if ($result->num_rows > 0) {
									while ($row = mysqli_fetch_assoc( $result)) {
										echo "<option>" . $row["c_id"] . "</option>";
									}
								}
								?>

							</select>
							&nbsp;&nbsp;
							<input type="submit" name="custadd" value="Add to Proceed.">
					</form>


					<?php
					
					$qry1 = "SELECT id from admin where a_username='$_SESSION[user]'";
					$result1 = $conn->query($qry1);
					$row1 = $result1->fetch_row();
					$eid = $row1[0];

					if (isset($_GET['sid'])) {
						$sid = $_GET['sid'];
					}

					if (isset($_POST['cid']))
						$cid = $_POST['cid'];

					if (isset($_POST['custadd'])) {

						$qry2 = "INSERT INTO sales(c_id,e_id) VALUES ('$cid','$eid')";
						if (!($result2 = $conn->query($qry2))) {
							echo "<p style='font-size:8; color:red;'>Invalid! Enter valid Customer ID to record Sales.</p>";
						}
					}
					?>

					<form method="post">
						<select id="med" name="med">
							<option value="0" selected="selected">Select Medicine</option>


							<?php
							$qry3 = "SELECT med_name FROM meds";
							$result3 = $conn->query($qry3);
							echo mysqli_error($conn);
							if ($result3->num_rows > 0) {
								while ($row4 = $result3->fetch_assoc()) {

									echo "<option>" . $row4["med_name"] . "</option>";
								}
							}
							?>

						</select>
						&nbsp;&nbsp;
						<input type="submit" name="search" value="Search">
					</form>

					<br><br><br>
					</center>


					<?php

					if (isset($_POST['search']) && !empty($_POST['med'])) {

						$med = $_POST['med'];
						$qry4 = "SELECT * FROM meds where med_name='$med'";
						$result4 = $conn->query($qry4);
						$row4 = $result4->fetch_row();

					}
					?>

					<div class="one row" style="margin-right:160px;">
						<form method="post">
							<div class="column">

								<label for="medid">Medicine ID:</label>
								<input type="number" name="medid" value="<?php echo $row4[0]; ?>" readonly><br><br>

								<label for="mdname">Medicine Name:</label>
								<input type="number" name="mdname" value="<?php echo $row4[1]; ?>" readonly><br><br>

							</div>
							<div class="column">

								<label for="mcat">Category:</label>
								<input type="number" name="mcat" value="<?php echo $row4[3]; ?>" readonly><br><br>

								<label for="mloc">Location:</label>
								<input type="number" name="mloc" value="<?php echo $row4[5]; ?>" readonly><br><br>

							</div>
							<div class="column">

								<label for="mqty">Quantity Available:</label>
								<input type="number" name="mqty" value="<?php echo $row4[2]; ?>" readonly><br><br>

								<label for="mprice">Price of One Unit:</label>
								<input type="number" name="mprice" value="<?php echo $row4[4]; ?>" readonly><br><br>

							</div>
							<label for="mcqty">Quantity Required:</label>
							<input type="number" name="mcqty">
							&nbsp;&nbsp;&nbsp;
							<input type="submit" name="add" value="Add Medicine">&nbsp;&nbsp;&nbsp;

							<?php

							if (isset($_POST['add'])) {

								$qry5 = "select sale_id from sales ORDER BY sale_id DESC LIMIT 1";
								$result5 = $conn->query($qry5);
								$row5 = $result5->fetch_row();
								$sid = $row5[0];
								echo mysqli_error($conn);

								$mid = $_POST['medid'];
								$aqty = $_POST['mqty'];
								$qty = $_POST['mcqty'];

								if ($qty > $aqty || $qty == 0) {
									echo "QUANTITY INVALID!";
								} else {
									$price = $_POST['mprice'] * $qty;
									$qry6 = "INSERT INTO sales_items(`sale_id`,`med_id`,`sale_qty`,`tot_price`) VALUES($sid,$mid,$qty,$price)";
									$result6 = mysqli_query($conn, $qry6);
									echo mysqli_error($conn);

									echo "<br><br> <center>";
									echo "<a class='button1 view-btn' href=pos2.php?sid=" . $sid . ">View Order</a>";
									echo "</center>";
								}
							}
							?>

						</form>
					</div>
				</div>
			</div>
			<?php include "footer.php" ?>
		</main>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>
