<?php 
  include('partials/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="Booking.css" />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />
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

      <!-- ---------------------------------- -->
      <div class="schedule">
        <div class="dates" id="calendar">
          <div class="month">
            <span>
              <img
                src="images/left-circle-svgrepo-com.svg"
                alt=""
                srcset=""
                id="prevmonth"
              />
            </span>
            <span id="month"> </span>
            <span>
              <img
                src="images/right-circle-svgrepo-com.svg"
                alt=""
                srcset=""
                id="nextmonth"
              />
            </span>
          </div>
          <!-- ---------------------------------- -->
          <div class="weekdays" id="days">
            <span>
              <img
                src="images/left-circle-svgrepo-com.svg"
                alt=""
                srcset=""
                id="prevday"
                class="border"
              />
            </span>
            <span class="swiper">
              <div class="swiper-wrapper" id="swiper-wrapper"></div>
            </span>
            <span>
              <img
                src="images/right-circle-svgrepo-com.svg"
                alt=""
                srcset=""
                id="nextday"
                class="border"
              />
            </span>
          </div>

          <!-- ------------------SLOTS---------------- -->


          <div class="slots">
            <div class="title">
              <span>Slots</span>
              <span>10 Slots left</span>
            </div>
            <div class="timings">
              <div class="morning box">
                <span class="slot">10:00 AM</span>
                <span class="slot">10:30 AM</span>
                <span class="slot">11:00 AM</span>
                <span class="slot">11:30 AM</span>
              </div>
              <div class="afternoon box">
                <span class="slot">12:30 PM</span>
                <span class="slot">01:00 PM</span>
                <span class="slot">01:30 PM</span>
                <span class="slot">02:00 PM</span>
                <span class="slot">02:30 PM</span>
                <span class="slot">03:00 PM</span>
                <span class="slot">03:30 PM</span>
                <span class="slot">04:00 PM</span>
                <span class="slot">04:30 PM</span>
                <span class="slot">05:00 PM</span>
              </div>
              <div class="evening box">
                <span class="slot">06:00 PM</span>
                <span class="slot">06:30 PM</span>
                <span class="slot">07:00 PM</span>
                <span class="slot">07:30 PM</span>
                <span class="slot">08:00 PM</span>
                <span class="slot">08:30 PM</span>
              </div>
            </div>
          </div>
        </div>

        <div class="book">Book Appointment</div>
      </div>
    </main>

    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <script src="./Booking.js"></script>
  </body>
</html>
