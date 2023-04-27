<?php
  require('./database.php');

  if (isset($_POST['submitbtn'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];
    // echo 'here';
    // die();
    $sql = "SELECT * FROM patient WHERE username = '$username' AND password = '$password'";
    $res = mysqli_query($conn , $sql);
    $rows = mysqli_num_rows($res);
    if ($rows == 1) {
      $_SESSION['patient'] = $username;
      
      header("Location:http://localhost/Hospital-Management-System/PatientDashboard.php");

    }else{
      echo "<script>alert('Username or password doesnt match');</script>";

    }
  }
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sign In</title>
    <link rel="stylesheet" href="SignIn.css" />
  </head>

  <body>
    <header>
      <img src="images/logo.png" alt="Docplus" /><span class="ocplus"
        >ocplus</span
      >
    </header>

    <main class="main">
      <aside>
        <img src="./images/login-img.svg" alt="" srcset="" />
      </aside>
      <div class="container">
        <div class="form">
          <form action="SignIn.php" method="POST">
            <div class="title">Sign In</div>
            <div class="content">
              <div class="input">
                <span>Username</span>
                <input
                  type="text"
                  placeholder="Username"
                  id="username"
                  name="username"
                  required
                />
              </div>
              <div class="input">
                <span>Password</span>
                <input
                  type="password"
                  placeholder="Password"
                  id="password"
                  name="password"
                  required
                />
              </div>
              <div class="input submit">
                <input type="submit" value="Sign In" name="submitbtn" />
              </div>
              <div class="signUp input">
                <p>New User? <a href="./SignUp.php">Sign up</a></p>
              </div>
            </div>
          </form>
        </div>
      </div>
    </main>
  </body>
</html>
