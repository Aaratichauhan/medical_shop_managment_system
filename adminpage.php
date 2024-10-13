<!DOCTYPE html>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="css/nav2.css">
	<title>
		Admin Dashboard
	</title>
	<link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
	<link href="css/styles.css" rel="stylesheet" />
	<script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body class="sb-nav-fixed">
	<?php include "header.php" ?>
	<?php include "sidenav.php" ?>
	<div id="layoutSidenav_content">
		<main>
			<div class="head">
				<h2 style="text-align:center;"> ADMIN DASHBOARD </h2>
			</div>
			<a href="pos1.php" title="Add New Sale">
				<img src="image\add_new_sales.png"
					style="padding:8px;margin-left:450px;margin-top:40px;width:200px;height:200px;border:2px solid black;"
					alt="Add New Sale">
			</a>
			<a href="inventory_view.php" title="View Inventory">
				<img src="image\inventory_view.jpg"
					style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;"
					alt="Inventory">
			</a>
			<a href="employee_view.php" title="View Employees">
				<img src="image\employee_list.png"
					style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;"
					alt="Employees List">
			</a>
			<br>
			<a href="salesreport.php" title="View Transactions">
				<img src="image\transaction.png"
					style="padding:8px;margin-left:550px;margin-top:40px;width:200px;height:200px;border:2px solid black;"
					alt="Transactions List">
			</a>
			<a href="stockreport.php" title="Low Stock Alert">
				<img src="image\low_stock.jpg"
					style="padding:8px;margin-left:100px;margin-top:40px;width:200px;height:200px;border:2px solid black;"
					alt="Low Stock Report">
			</a>
			<?php include "footer.php" ?>
		</main>
	</div>
	<script src="js/bootstrap.bundle.min.js"></script>
	<script src="js/scripts.js"></script>

</body>
</html>