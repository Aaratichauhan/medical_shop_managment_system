<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	PURCHASE DETAILS
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
				<h2 style="text-align:center;"> ADD PURCHASE DETAILS </h2>
			</div>
			<div class="one head">
				<div class="row">
				<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
				
				<?php
				
					include "config.php";
					 
					if(isset($_POST['add']))
					{
					$pid = mysqli_real_escape_string($conn, $_REQUEST['pid']);
					$sid = mysqli_real_escape_string($conn, $_REQUEST['sid']);
					$mid = mysqli_real_escape_string($conn, $_REQUEST['mid']);
					$qty = mysqli_real_escape_string($conn, $_REQUEST['pqty']);
					$cost = mysqli_real_escape_string($conn, $_REQUEST['pcost']);
					$pdate = mysqli_real_escape_string($conn, $_REQUEST['pdate']);
					$mdate = mysqli_real_escape_string($conn, $_REQUEST['mdate']);
					$edate = mysqli_real_escape_string($conn, $_REQUEST['edate']);
			
					$sql = "INSERT INTO purchase VALUES ($pid, $sid, $mid,'$qty','$cost','$pdate','$mdate','$edate')";
					if(mysqli_query($conn, $sql)){
						echo "<p style='font-size:8;'>Purchase details successfully added!</p>";
					} else{
						echo "<p style='font-size:8;color:red;'>Error! Check details.</p>";
					}
					
					}
					 
					$conn->close();
				?>
				
						<div class="column">
								<p>
									<label for="pid">Purchase ID:</label><br>
									<input type="number" name="pid">
								</p>
								<p>
									<label for="sid">Supplier ID:</label><br>
									<input type="number" name="sid">
								</p>
								<p>
									<label for="mid">Medicine ID:</label><br>
									<input type="number" name="mid">
								</p>
								<p>
									<label for="pqty">Purchase Quantity:</label><br>
									<input type="number" name="pqty">
								</p>
								
								
							</div>
							<div class="column">
								
								<p>
									<label for="pcost">Purchase Cost:</label><br>
									<input type="number" step="0.01" name="pcost">
								</p>
								
								
								<p>
									<label for="pdate">Date of Purchase:</label><br>
									<input type="date" name="pdate">
								</p>
								<p>
									<label for="mdate">Manufacturing Date:</label><br>
									<input type="date" name="mdate">
								</p>
								<p>
									<label for="edate">Expiry Date:</label><br>
									<input type="date" name="edate">
								</p>
								
							</div>
							
						
						<input type="submit" name="add" value="Add Purchase">
						</form>
					<br>
				
				</div>
			</div>
			<?php include "footer.php" ?>
		</main>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>

