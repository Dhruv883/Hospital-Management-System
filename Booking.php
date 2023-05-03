<?php 
// error_reporting(0);
include('./partials/navbar.php');
if (isset($_POST['submit'])) {
    if (!isset($_SESSION['patient'])) {

      header("Location:http://localhost/Hospital-Management-System/SignIn.php");

    }else{

      if (isset($_POST['time'])) {

        $time = $_POST['time'];
        $date = date('d-m-Y', strtotime($_POST['date']));
        $docid = $_POST['docid'];
        
        $patient = $_SESSION['patient'];
        $sql = "SELECT * FROM patient WHERE username = '$patient'";
        $res = mysqli_query($conn, $sql);
        $patid =mysqli_fetch_assoc($res)['patientid'];

        $sql = "SELECT * FROM appointment WHERE docid =$docid AND patid=$patid AND date='$date' AND slot='$time'";
        $res = mysqli_query($conn, $sql);
        if (mysqli_num_rows($res) >=1) {

          echo "<script>alert('Slot is not Available');</script>";
          // header("Location:http://localhost/Hospital-Management-System/Booking.php?docid=1");
        }else{

          $sql = "INSERT INTO appointment (docid, patid, date, slot) VALUES ($docid, $patid, '$date', '$time')";
          $res = mysqli_query($conn, $sql);
        }

      }else{
       
        echo "<script>alert('Choose a Slot');</script>";
      }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Booking.css" />
    <title>Book Appointment</title>
  </head>
  <body>

    <main>
      <div class="docInfo">
        <div class="doc">
          <div><img src="images/doctor.png" alt="" srcset="" /></div>
          <div class="docinfo">
            <span class="name">Dr. Xyz Abc</span>
            <span>Pediatrician</span>
            <span>0 Year Experience</span>
            <span>MBBS</span>
          </div>
        </div>

        <div class="about">
          <span>About</span>
          <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Praesentium
            animi eligendi quasi. Nulla odio maiores eos, fuga quae enim
            possimus atque repudiandae facere illum vitae.
          </p>
        </div>
      </div>
      <form action="Booking.php" method="post">
     
      <div class="schedule">
        <div>
          <span class="datelabel" for="date">Select a Date </span>
          <input type="date" name="date" id="date" value="<?php echo date('Y-m-d'); ?>" required>
        </div>
        <div class="dates" id="calendar">
          <?php 
            $docid=$_GET['docid'];
            
          echo'
            <div class="slots">
              <div class="title">
              <span>Slots</span>
              <span>20 Slots left</span>
            </div>
            <div class="timings">
              <div class="morning box">
                <a href="Booking.php?docid='.$docid.'&time=10:00" class=""><span class="slot">10:00 AM</span></a>
                <a href="Booking.php?docid='.$docid.'&time=10:30" class=""><span class="slot">10:30 AM</span></a>
                <a href="Booking.php?docid='.$docid.'&time=11:00" class=""><span class="slot">11:00 AM</span></a>
                <a href="Booking.php?docid='.$docid.'&time=11:30" class=""><span class="slot">11:30 AM</span></a>
              </div>
              <div class="afternoon box">
              <a href="Booking.php?docid='.$docid.'&time=12:30" class=""><span class="slot<?php if ($_GET[\'time\'] == "12:30") { echo \'active\'; } ?>12:30 PM</span></a>

              <a href="Booking.php?docid='.$docid.'&time=13:00" class=""><span class="slot">01:00 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=13:30" class=""><span class="slot">01:30 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=14:00" class=""><span class="slot">02:00 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=14:30" class=""><span class="slot">02:30 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=15:00" class=""><span class="slot">03:00 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=15:30" class=""><span class="slot">03:30 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=16:00" class=""><span class="slot">04:00 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=16:30" class=""><span class="slot">04:30 PM</span></a>
              <a href="Booking.php?docid='.$docid.'&time=17:00" class=""><span class="slot">05:00 PM</span></a>  
              </div>

              <div class="evening box">
               <a href="Booking.php?docid='.$docid.'&time=18:00" class=""><span class="slot active">06:00 PM</span></a>
               <a href="Booking.php?docid='.$docid.'&time=18:30" class=""><span class="slot">06:30 PM</span></a>
               <a href="Booking.php?docid='.$docid.'&time=19:00" class=""><span class="slot">07:00 PM</span></a>
               <a href="Booking.php?docid='.$docid.'&time=19:30" class=""><span class="slot">07:30 PM</span></a>
               <a href="Booking.php?docid='.$docid.'&time=20:00" class=""><span class="slot">08:00 PM</span></a>
               <a href="Booking.php?docid='.$docid.'&time=20:30" class=""><span class="slot">08:30 PM</span></a>
              </div>
            </div>
          </div>
        </div>';
        ?>

        <div class="input dateInp">
            <input type="hidden" value=<?php if (isset($_GET['time'])) {
              echo $_GET['time'];
            }?> name="time" />
        </div>

        <div class="input">
            <input type="hidden" value=<?php if (isset($_GET['docid'])) {
              echo $_GET['docid'];
            }?> name="docid" />
        </div>
        
        <div class="input submit">
            <input type="submit" value="Book Appointment" name="submit" />
        </div>
        </div>
      </form>
    </main>

    <script src="./Booking.js"></script>
  </body>
</html>

