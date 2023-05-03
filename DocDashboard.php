<?php 
    require('./database.php');
    if (!isset($_SESSION['doctor'])) {
        header("Location:http://localhost/Hospital-Management-System/DoctorSignIn.php");
    }

    // if (isset($_POST['status'])) {
    // $status = $_POST['status'];
    // $order_id = $_POST['order_id'];
    // $customer_id = $_POST['customer_id'];
    // $sql = "UPDATE appointment SET status = '$status' WHERE docid = $order_id AND patid =$customer_id";
    // $res = mysqli_query($conn, $sql);
  // }
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="DocDashboard.css" />
    <title>Dashboard</title>
  </head>
  <body>
    <main>
      <div class="sidebar close" id="sidebar">
        <div class="hambtn">
          <img
            src="images/hamburger-md-svgrepo-com.svg"
            alt=""
            srcset=""
            class="hamburger"
            id="hamburger"
          />
        </div>
        <div class="logo">
          <span>
            <img src="images/logo.png" alt="Docplus" /><span class="ocplus text"
              >ocplus</span
            >
          </span>
        </div>

        <div class="logout">
          <a href="doclogout.php">
            <span
            ><img src="images/logout-svgrepo-com.svg" alt="" srcset=""
          /></span>
          <span class="text">Log Out</span>
          </a>
        </div>
      </div>

      <div class="main">
        <div class="header" id="header">
          <span>
            <span><img src="images/user-grey.svg" alt="" srcset="" /></span>
            <span><?php  echo $_SESSION['doctor']?></span>
          </span>
        </div>
        <div class="content">
          <?php 
              $username = $_SESSION['doctor'];
              $sql = "SELECT * FROM  doctor WHERE username = '$username'";
              $res = mysqli_query($conn ,$sql);
              $docid = mysqli_fetch_assoc($res)['docid'];

              $sql = "SELECT * FROM appointment WHERE docid = $docid";
              $result = mysqli_query($conn, $sql);

              while ($row = mysqli_fetch_assoc($result)) {
                  $query = "SELECT * FROM patient WHERE patientid = $row[patid]";
                  $rq = mysqli_query($conn, $query);
                  $pat = mysqli_fetch_assoc($rq);
                  $fname = $pat['fname'];
                  $lname = $pat['lname'];
                echo'
                    <div class="appointment">
            <div class="appid">'.$row['apid'].'</div>
            <div class="pname">'.$fname." ".$lname.'</div>
            <div class="apdate">'.$row['date'].'</div>
            <div class="aptime">'.$row['slot'].'</div>
            <div class="apstatus">'.$row['status'].'</div>
            <form id = "status-form" action="DocDashboard.php" method="post" onchange="submit()">
        
              <input type="hidden" name="apid" value="">

              <select name="status" id="status">
              <option value="" selected disabled hidden>
              Update Status
              </option>
              <option value="Active">Active</option>
              <option value="Completed">Completed</option>
              </select>
            </form>
          </div>
                ';
              }
          ?>
          
        </div>
      </div>
    </main>

    <script src="dashboard.js"></script>
  </body>
</html>
