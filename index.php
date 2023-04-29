<?php 
  include('./partials/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Docplus</title>
    <link rel="stylesheet" href="styles.css" />
  </head>

  <body>
    <!-- NAVBAR -->

  

    <!-- HOME SECTION -->

    <section id="home" class="home">
      <div class="home1">
        <div class="image">
          <img src="images/homeImg.png" alt="" srcset="" />
        </div>

        <div class="content">
          <h3>Health is not a goal, it's a way of life</h3>
          <p>
            Welcome to Docplus, where our mission is to provide exceptional
            healthcare services to our patients with compassion and excellence.
          </p>
          <a href="#contactUs">Contact Us</a>
        </div>
      </div>

      <div class="home-cards">
        <div class="card card1">
          <div class="logo">
            <img src="images/user-doctor-svgrepo-com.svg" alt="" srcset="" />
          </div>
          <div class="numbers">50+</div>
          <div class="home-card-info">Doctors At Work</div>
        </div>
        <div class="card card2">
          <div class="logo">
            <img src="images/people-svgrepo-com.svg" alt="" srcset="" />
          </div>
          <div class="numbers">5000+</div>
          <div class="home-card-info">Happy Patients</div>
        </div>
        <div class="card card3">
          <div class="logo">
            <img src="images/hospital-bed-svgrepo-com.svg" alt="" />
          </div>
          <div class="numbers">150+</div>
          <div class="home-card-info">Bed Facility</div>
        </div>
        <div class="card card4">
          <div class="logo">
            <img src="images/ambulance-svgrepo-com.svg" alt="" />
          </div>
          <div class="numbers">10+</div>
          <div class="home-card-info">Ambulances</div>
        </div>
      </div>
    </section>

    <!-- ABOUT SECTION -->

    <section id="about" class="about">
      <!-- Main About  -->

      <div class="about1">
        <div class="about-title"><span>About</span> Us</div>
        <div class="about1-content">
          <div class="about-image">
            <img src="images/about-doctors.png" alt="" srcset="" />
          </div>

          <div class="about-content">
            <h3>We Take Care Of Your Healthy Life</h3>
            <p>
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed
              blanditiis, corrupti possimus officiis alias voluptate.
            </p>
            <p>
              Lorem ipsum dolor sit amet, consectetur adipisicing elit. Et
              perferendis asperiores provident qui consequatur earum nesciunt,
              harum deleniti obcaecati debitis fugit aliquid tempore? Cumque,
              nesciunt.
            </p>
          </div>
        </div>
      </div>

      <!-- CARDS -->

      <div class="about-card-section">
        <div class="title">How does Docplus work ?</div>

        <div class="cards">
          <a href="specialities.php">
            <div class="steps step1">
              <div class="img">
                <img src="images/search-svgrepo-com.svg" alt="" srcset="" />
              </div>
              <div class="cardTitle">Search</div>
              <div class="info">
                Enter a specialty to choose from top rated doctors
              </div>
            </div>
          </a>
          <a href="doctors.php">
            <div class="steps step2">
              <div class="img">
                <img src="images/calendar-svgrepo-com.svg" alt="" srcset="" />
              </div>
              <div class="cardTitle">Book</div>
              <div class="info">
                Book your appointment in simple steps as guided.
              </div>
            </div>
          </a>
          <div class="steps step3">
            <div class="img">
              <img src="images/emoji-smile-svgrepo-com.svg" alt="" srcset="" />
            </div>
            <div class="cardTitle">Heal</div>
            <div class="info">
              2 simple steps to avail free and efficient healthcare
            </div>
          </div>
        </div>
      </div>
    </section>

    <!-- CONTACT US SECTION -->

    <section id="contactUs" class="contact-us">
      <div class="contact-title"><span>Contact</span> Us</div>
      <div class="contact-options">
        <div class="option-card whatsapp">
          <div class="logo">
            <img src="images/call-svgrepo-com.svg" alt="" srcset="" />
          </div>
          <div class="option">Call us</div>
          <div class="option-info">
            <div>
              <p>Monday-Saturday</p>
              <p>09:00 am to 06:00pm (IST)</p>
            </div>

            <div>
              <p>+91 9999913333</p>
              <p>+91 9888812222</p>
            </div>
          </div>
        </div>

        <div class="option-card mail">
          <div class="logo">
            <img src="images/mail-svgrepo-com.svg" alt="" />
          </div>
          <div class="option">Write to us</div>
          <div class="option-info">
            <p>General Enquiries: <span>docquery@docplus.com</span></p>
            <p>Collaborations: <span>docollaborate@docplus.com</span></p>
          </div>
        </div>

        <div class="option-card message">
          <div class="logo">
            <img src="images/chat-square-svgrepo-com.svg" alt="" />
          </div>
          <div class="option">Live Chat</div>
          <div class="option-info">
            <div>
              <p>Monday-Saturday</p>
              <p>09:00 am to 06:00pm (IST)</p>
            </div>

            <div>
              <p>+91 9999913333</p>
              <p>+91 9888812222</p>
            </div>
          </div>
        </div>
      </div>
      <div class="contact-form">
        <form action="">
          <div class="grp1">
            <div class="input">
              <span>First Name</span>
              <input type="text" name="" id="" placeholder="First Name" />
            </div>

            <div class="input">
              <span>Last Name</span>
              <input type="text" name="" id="" placeholder="Last Name" />
            </div>
          </div>

          <div class="grp2">
            <div class="input">
              <span>Email</span>
              <input type="email" name="" id="" placeholder="Email" />
            </div>

            <div class="input">
              <span>Phone</span>
              <input type="number" name="" id="" placeholder="Phone" />
            </div>
          </div>

          <div class="input">
            <span>Message</span>
            <textarea
              name=""
              id=""
              cols="75"
              rows="10"
              maxlength="350"
              placeholder="Message"
            ></textarea>
          </div>
          <div class="submit"><button type="submit">Send</button></div>
        </form>
      </div>
    </section>

    <!-- Review Section -->
    <section class="reviews">
      <div class="reviewinfo">
        <h1>Our Patient's Stories</h1>
        <a href=""><button>View all</button></a>
      </div>
      <div class="demoreview">
        <div class="reviewerimg"><img src="images/reviewer.jpg" alt="" /></div>
        <div class="reviewtxt">
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea libero
          eius, rem facilis amet quod quidem, ex suscipit consequatur soluta
          repudiandae accusantium nisi beatae quaerat expedita id autem totam
          atque.
        </div>
      </div>
    </section>

    <!-- FOOTER SECTION -->

    <section class="footer" id="footer"></section>
  </body>
</html>
