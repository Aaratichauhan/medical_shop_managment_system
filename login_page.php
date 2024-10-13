<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="css/login1.css">

<head>
  <title>
    Medical Shop Management System
  </title>
</head>

<body>
  <div style=" background: #2f302f;" class="header">
    <h1>Medical Shop Management System</h1>
    <p style="margin-top:-20px;line-height:1;font-size:30px;">A Database Management Systems Project</p>
    <p style="margin-top:-20px; line-height:1;font-size:20px;">Department of Computer Science and Engineering</p>
  </div>
  <br><br><br><br>
  <div class="container">
    <form method="post" action="<?= $_SERVER['PHP_SELF'] ?>">
      <div id="div_login">
        <h1 style=" background:#2f302f;">Admin Login</h1>

        <div>
          <input type="text" class="textbox" id="uname" name="uname" placeholder="Username" />
        </div>
        <div>
          <input type="password" class="textbox" id="pwd" name="pwd" placeholder="Password" />
        </div>
        <div>

          <input style=" background: #2f302f;" type="submit" value="Submit" name="submit" id="submit" />
            
          <?php

          include "config.php";

          if (isset($_POST['submit'])) {

            $uname = mysqli_real_escape_string($conn, $_POST['uname']);
            $password = mysqli_real_escape_string($conn, $_POST['pwd']);

            if ($uname != "" && $password != "") {

              $sql = "SELECT * FROM admin WHERE a_username='$uname' AND a_password='$password'";
              $result = $conn->query($sql);
              $row = $result->fetch_row();
              if (!$row) {
                echo "<p style='color:red;'>Invalid username or password!</p>";
              } else {
                session_start();
                $_SESSION['user'] = $uname;
                header('location:adminpage.php');
              }
            }
          }

          ?>


        </div>

      </div>
    </form>
  </div>

  <div style=" background: #2f302f;"  class=footer>
    <br>
    Developed by, Aarati Chauhan, 2021
    <br><br>
  </div>

</body>

</html>