<?php 
  require('../database.php');
  include('auth.php'); 
  
?>

      <nav>
       <div>
          <li class="brand">
            <img src="../images/whiteLogo.png" alt="Docplus" /><span class="ocplus"
              >ocplus</span
            >
          </li>
        </div>

      <div class="navContent">
        <span><a href="./index.php">Home</a></span>
        <span><a href="./speciality.php">Specialities</a></span>
        <span><a href="./doctors.php">Doctors</a></span>
      </div>

       <div class="logsign">
        <button><a href="logout.php">Log-Out</a></button>
      </div>
      
    </nav>
