<?php 
  include('database.php');
  // session_unset();
  // session_destroy();
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="PatientDashboard.css" />
    <title>Document</title>
  </head>
  <body>
    <main>
      <div class="sidebar" id="sidebar">
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

        <div class="menu-item">
          <a href="">
            <span
            ><img src="images/appointment-blue.svg" alt="" srcset=""
          /></span>
          <span class="text">Appointments</span>
          </a>
        </div>

        <div class="menu-item">
         <a href="specialities.php">
           <span
            ><img src="images/appointment-blue.svg" alt="" srcset=""
          /></span>
          <span class="text">Book Appointment</span>
         </a>
        </div>

        <div class="menu-item">
         <a href="logout.php">
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
            <span><?php  echo $_SESSION['patient']?></span>
          </span>
        </div>
        <div class="content">
          <?php 
              $username = $_SESSION['patient'];
              $sql = "SELECT * FROM patient WHERE username = '$username'";
              $res = mysqli_query($conn, $sql);

              $patid = mysqli_fetch_assoc($res)['patientid'];

              $sql1 = "SELECT * FROM appointment WHERE patid = $patid";
              $result = mysqli_query($conn, $sql1);
              while ($row = mysqli_fetch_assoc($result)) {
                $docid = $row['docid'];
                $query = "SELECT * FROM doctor where docid = $docid";
                $re = mysqli_query($conn, $query);
                $doc = mysqli_fetch_assoc($re);
                $fname = $doc['fname'];
                $lname = $doc['lname'];
                echo '
                <div class="ap">
                  <div class="apid">'.$row['apid'].'</div>
                  <div class="docname">Dr. '.$fname." ". $lname.'</div>
                  <div class="docspeciality">'.$doc['speciality'].'</div>
                  <div class="apdate">'.$row['date'].'</div>
                  <div class="apslot">'.$row['slot'].'</div>
                  <div class="apstatus">'.$row['status'].'</div>
                </div>
              </div>';
              }
          ?>

      </div>
    </main>

    <script src="dashboard.js"></script>
  </body>
</html>
