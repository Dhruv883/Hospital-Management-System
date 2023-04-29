  <?php 
    require('./database.php');
  ?>
  
  <nav>
      <ul>
        <div>
          <li class="brand">
            <img src="images/whiteLogo.png" alt="Docplus" /><span class="ocplus"
              >ocplus</span
            >
          </li>
        </div>
        <div>
          <li><a href="index.php">Home</a></li>
          <li><a href="index.php#about">About</a></li>
          <li><a href="specialities.php">Specialities</a></li>
        </div>
        <?php 
          if (!isset($_SESSION['patient'])) {
            echo '
              <div>
              <li>
              <div class="logsign">
              <a href="SignIn.php"
                ><button class="login">
                  <span>Register / Sign In</span>
                </button></a
              >
              </div>
              </li>
              </div>
            ';
          }else{
            echo '
              <div>
              <span><a href="PatientDashboard.php"><img src="images/user-white.svg" alt="" srcset="" /></a></span>
              </div>
            ';
          }

        ?>
        
      </ul>
    </nav>