<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>sidenav</title>
</head>

<body>
  <div id="layoutSidenav">
    <div id="layoutSidenav_nav">
      <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
          <div class="nav">
            <a class="nav-link" href="adminpage.php">
              <div class="sb-nav-link-icon"></div>
              Dashboard
            </a>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse"
              data-bs-target="#collapseInventory" aria-expanded="false" aria-controls="collapseInventory">
              Inventory
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseInventory" aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="inventory_add.php">Add New Medicine</a>
                <a class="nav-link" href="inventory_view.php">Manage Inventory</a>
              </nav>
            </div>


            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseSuppliers"
              aria-expanded="false" aria-controls="collapseSuppliers">
              Suppliers
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseSuppliers" aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="supplier_add.php">Add New Supplier</a>
                <a class="nav-link" href="supplier_view.php">Manage Suppliers</a>
              </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseStock"
              aria-expanded="false" aria-controls="collapseStock">
              Stock Purchase
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseStock" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="purchase_add.php">Add New Purchase</a>
                <a class="nav-link" href="purchase_view.php">Manage Purchases</a>
              </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseEmployees"
              aria-expanded="false" aria-controls="collapseEmployees">
              Employees
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseEmployees" aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="employee_add.php">Add New Employee</a>
                <a class="nav-link" href="employee_view.php">Manage Employees</a>
              </nav>
            </div>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseCustomers"
              aria-expanded="false" aria-controls="collapseCustomers">
              Customers
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseCustomers" aria-labelledby="headingOne"
              data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="customer_add.php">Add New Customer</a>
                <a class="nav-link" href="customer_view.php">Manage Customers</a>
              </nav>
            </div>

            <a class="nav-link" href="sales_view.php">
              <div class="sb-nav-link-icon"></i></div>
              View Sales Invoice Details
            </a>
            <a class="nav-link" href="salesitems_view.php">
              <div class="sb-nav-link-icon"></div>
              View Sold Products Details
            </a>
            <a class="nav-link" href="pos1.php">
              <div class="sb-nav-link-icon"></div>
              Add New Sale
            </a>

            <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapseLayouts"
              aria-expanded="false" aria-controls="collapseLayouts">
              Reports
              <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
              <nav class="sb-sidenav-menu-nested nav">
                <a class="nav-link" href="stockreport.php">Medicines - Low Stock</a>
                <a class="nav-link" href="expiryreport.php">Medicines - Soon to Expire</a>
                <a class="nav-link" href="salesreport.php">Transactions Reports</a>
              </nav>
            </div>

          </div>
        </div>
      </nav>
    </div>
  </div>
</body>

</html>