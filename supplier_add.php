<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" type="text/css" href="css/nav2.css">
  <title>
    SUPPLIER DETAILS
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
        <h2 style="text-align:center;"> ADD SUPPLIER DETAILS </h2>
      </div>
      <div class="one head">
        <div class="row">
          <form action="<?= $_SERVER['PHP_SELF'] ?>" method="post">
            <div class="column">
              <p>
                <label for="sid">Supplier ID:</label><br>
                <input type="number" name="sid">
              </p>
              <p>
                <label for="sname">Supplier Company Name:</label><br>
                <input type="text" name="sname">
              </p>
              <p>
                <label for="sadd">Address:</label><br>
                <input type="text" name="sadd">
              </p>


            </div>
            <div class="column">
              <p>
                <label for="sphno">Phone Number:</label><br>
                <input type="number" name="sphno">
              </p>

              <p>
                <label for="smail">Email Address </label><br>
                <input type="text" name="smail">
              </p>

            </div>


            <input type="submit" name="add" value="Add Supplier">
          </form>
          <br>


          <?php
          include "config.php";

          if (isset($_POST['add'])) {
            $id = mysqli_real_escape_string($conn, $_REQUEST['sid']);
            $name = mysqli_real_escape_string($conn, $_REQUEST['sname']);
            $add = mysqli_real_escape_string($conn, $_REQUEST['sadd']);
            $phno = mysqli_real_escape_string($conn, $_REQUEST['sphno']);
            $mail = mysqli_real_escape_string($conn, $_REQUEST['smail']);


            $sql = "INSERT INTO suppliers VALUES ($id, '$name','$add',$phno, '$mail')";
            if (mysqli_query($conn, $sql)) {
              echo "<p style='font-size:8;'>Supplier details successfully added!</p>";
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


