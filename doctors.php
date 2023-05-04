<?php 
  include('./partials/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Doctors</title>
    <link rel="stylesheet" href="doctor.css" />
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>

    <?php 
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM speciality where id = '$id'";
        $res = mysqli_query($conn , $sql);
        $row = mysqli_fetch_assoc($res);
        $specname = $row['name']; 

        $query = "SELECT * FROM doctor WHERE speciality = '$specname'";
        $result = mysqli_query($conn, $query);
        // $id = 1;
        echo '<div class="speciality">'.$specname.'</div>';
        echo '<div class="list">';
        while ($row = mysqli_fetch_assoc($result)) {
          $fname = $row['fname'];
          $lname = $row['lname'];
          $docid = $row['docid'];
         echo '
        <div class="doc">
          <div><img src="images/doctor.png" alt="" srcset="" /></div>
          <div class="docinfo">
          <span class="name">Dr. '.$fname." ".$lname.'</span>
            <span>'.$specname.'</span>
            <span>'.$row['experience'].' Years Experience</span>
            
          </div>
        <div class="vl"></div>
        <div class="bookappointment">
        <a href="Booking.php?docid='.$docid.'"><button>Book an Appointment</button></a>
        </div>
        </div>';
         
        }
 
        '</div>';
      }
        ?>
  </body>
  </html>
  