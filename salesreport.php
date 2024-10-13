<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
	REPORT
	</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" type="text/css" href="css/table1.css">
<link rel="stylesheet" type="text/css" href="css/form3.css">
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<?php include "header.php" ?>
	<?php include "sidenav.php" ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="head">
				<h2 style="text-align:center;"> TRANSACTION REPORTS </h2>
			</div>
			<div class="one head"> 
			<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
					<p>
						<label for="start">Start Date:</label>
						<input type="date" name="start">
					</p>
					<p>
						<label for="end">End Date:</label>
						<input type="date" name="end">
					</p>
				
			<input type="submit" name="submit" value="View Records">
			</form>	
	
	<?php
	include "config.php";
		if(isset($_POST['submit'])) {
			
			$start=$_POST['start'];
			$end=$_POST['end'];
			$res=mysqli_query($conn,"SELECT P_AMT('$start','$end') AS PAMT") or die(mysqli_error($conn));
			while($row=mysqli_fetch_array($res))
			{
				$pamt=$row['PAMT'];
				
			}
			
			$res=mysqli_query($conn,"SELECT S_AMT('$start','$end') AS SAMT;") or die(mysqli_error($conn));
			while($row=mysqli_fetch_array($res))
			{
				$samt=$row['SAMT'];
				
			} 
			
			$profit = $samt - $pamt;
			$profits = number_format($profit, 2);
	?>
			
		<table align="right" id="table1" style="margin-right:100px;">
			<tr>
				<th>Purchase ID</th>
				<th>Supplier ID</th>
				<th>Medicine ID</th>
				
				<th>Quantity</th>
				<th>Date of Purchase</th>
				<th>Cost of Purchase(in Rs)</th>
			</tr>
	<?php
	$sql = "SELECT p_id,sup_id,med_id,p_qty,p_cost,pur_date FROM purchase 
			WHERE pur_date >= '$start' AND pur_date <= '$end';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			
		echo "<tr>";
			echo "<td>" . $row["p_id"]. "</td>";
			echo "<td>" . $row["sup_id"]. "</td>";
			echo "<td>" . $row["med_id"]. "</td>";
			echo "<td>" . $row["p_qty"]. "</td>";
			echo "<td>" . $row["pur_date"]. "</td>";
			echo "<td>" . $row["p_cost"]. "</td>";
			
		echo "</tr>";
		}
	}
	
	echo "<tr>";
	echo "<td colspan=5>Total</td>";
	echo"<td >Rs.".$pamt."</td>";
	echo "</tr>";
	echo "</table>";
	echo "</table>";
	?>	
	
	<table align="right" id="table1" style="margin-right:100px;">
		<tr>
			<th>Sale ID</th>
			<th>Customer ID</th>
			<th>Employee ID</th>
			<th>Date</th>
			<th>Sale Amount(in Rs)</th>
		</tr>
	
	<?php
	include "config.php";
	$sql = "SELECT sale_id, c_id,s_date,s_time,total_amt,e_id FROM sales
			WHERE s_date >= '$start' AND s_date <= '$end';";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
	
		while($row = $result->fetch_assoc()) {
			
			
		echo "<tr>";
			echo "<td>" . $row["sale_id"]. "</td>";
			echo "<td>" . $row["c_id"] . "</td>";
			echo "<td>" . $row["e_id"]. "</td>";
			echo "<td>" . $row["s_date"]."</td>";
			echo "<td>" . $row["total_amt"]. "</td>";
			
		echo "</tr>";
		}
	echo "<tr>";
	echo "<td colspan=4>Total</td>";
	echo"<td >Rs.".$samt."</td>";
	echo "</tr>";
	echo "</table>";
	}
	?>
	
	<table align="right" id="table1" style="margin-bottom:100px;margin-right:100px;">
	<tr style="background-color: #f2f2f2;" >
		<td>Transaction Amount </td>
				<td>Rs.<?php echo $profits; }?></td>
	</tr>
	</div>
	</table>
			<?php include "footer.php" ?>
			
		</main>
	</div>

	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>

</html>
