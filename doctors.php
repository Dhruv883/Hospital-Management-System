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
  </head>

  <body>

    <?php 
    include('./database.php');
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM speciality where id = '$id'";
        $res = mysqli_query($conn , $sql);
        $row = mysqli_fetch_assoc($res);
        $name = $row['name'];
        
        echo '<div class="speciality">'.$name.'</div>

      <div class="list">
      <div class="doc">
          <div><img src="images/doctor.png" alt="" srcset="" /></div>
          <div class="docinfo">
          <span class="name">Dr. Xyz Abc</span>
            <span>Pediatrician</span>
            <span>0 YEAR Experience</span>
            <span>MBBS</span>
          </div>
        <div class="vl"></div>
        <div class="bookappointment">
        <a href="Booking.html"><button>Book an Appointment</button></a>
        </div>
        </div>
        
        <div class="doc">
        <div><img src="images/doctor.png" alt="" srcset="" /></div>
        <div class="docinfo">
          <span class="name">Dr. Xyz Abc</span>
          <span>Pediatrician</span>
          <span>0 YEAR Experience</span>
          <span>MBBS</span>
        </div>
        <div class="vl"></div>
        <div class="bookappointment">
        <a href="Booking.html"><button>Book an Appointment</button></a>
        </div>
        </div>
        
      <div class="doc">
      <div><img src="images/doctor.png" alt="" srcset="" /></div>
        <div class="docinfo">
          <span class="name">Dr. Xyz Abc</span>
          <span>Pediatrician</span>
          <span>0 YEAR Experience</span>
          <span>MBBS</span>
          </div>
        <div class="vl"></div>
        <div class="bookappointment">
          <a href="Booking.html"><button>Book an Appointment</button></a>
          </div>
      </div>
      
      <div class="doc">
      <div><img src="images/doctor.png" alt="" srcset="" /></div>
        <div class="docinfo">
        <span class="name">Dr. Xyz Abc</span>
        <span>Pediatrician</span>
        <span>0 YEAR Experience</span>
        <span>MBBS</span>
        </div>
        <div class="vl"></div>
        <div class="bookappointment">
        <a href="Booking.html"><button>Book an Appointment</button></a>
        </div>
        </div>
      
      <div class="doc">
        <div><img src="images/doctor.png" alt="" srcset="" /></div>
        <div class="docinfo">
        <span class="name">Dr. Xyz Abc</span>
        <span>Pediatrician</span>
        <span>0 YEAR Experience</span>
        <span>MBBS</span>
        </div>
        <div class="vl"></div>
        <div class="bookappointment">
        <a href="Booking.html"><button>Book an Appointment</button></a>
        </div>
        </div>
      
        <div class="doc">
        <div><img src="images/doctor.png" alt="" srcset="" /></div>
        <div class="docinfo">
        <span class="name">Dr. Xyz Abc</span>
        <span>Pediatrician</span>
        <span>0 YEAR Experience</span>
        <span>MBBS</span>
        </div>
        <div class="vl"></div>
        <div class="bookappointment">
        <a href="Booking.html"><button>Book an Appointment</button></a>
        </div>
        </div>
        ';
      }
        ?>
    </div>
  </body>
  </html>
  