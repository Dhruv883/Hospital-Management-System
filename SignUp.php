
<?php

if (isset($_POST['submitbtn'])) {
     
      require 'database.php';
     
      $fname = $_POST['fname'];
      $lname = $_POST['lname'];
      $gender = $_POST['gender'];
      $email = $_POST['email'];
      $age = $_POST['age'];
      $username = $_POST['username'];
      $password = $_POST['password'];
      $cpassword = $_POST['cpassword'];

      $exists = false;
      $usercopy = "SELECT * FROM patient WHERE username='$username'";
      if (mysqli_num_rows(mysqli_query($conn, $usercopy)) > 0) {
        $exists = true;
        echo "<script>alert('Username Already Exists!');</script>";
      }
      $emailcopy = "SELECT * FROM patient WHERE email='$email'";
      if (mysqli_num_rows(mysqli_query($conn, $emailcopy)) > 0) {
        $exists = true;
        echo "<script>alert('Email Already Exists!');</script>";
      }


      if (!$exists) {

       if($password != $cpassword ){
            echo "<script>alert('Passwords are not same!');</script>";
        }else{

          $sql = "INSERT INTO patient (fname, lname, gender, email, age, username, password) VALUES ('$fname', '$lname', '$gender', '$email', $age, '$username', '$password')";

          $result = mysqli_query($conn, $sql);

          if(!$result){
          echo 'Failed to connect';
          }else{
            header("Location:http://localhost/Hospital-Management-System/SignIn.html");
          }

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
    <title>Sign Up</title>
    <link rel="stylesheet" href="./SignUp.css" />
  </head>

  <body>
    <main>
      <header>
        <a href="index.html"
          ><img src="images/logo.png" alt="Docplus" /><span class="ocplus"
            >ocplus</span
          ></a
        >
      </header>
      <form action="SignUp.php" method="post">
        <div class="mainContent">
          <div class="content-1">
            <div class="content">
              <div class="input">
                <span>First name</span>
                <input
                  type="text"
                  placeholder="First name"
                  id="fname"
                  name="fname"
                  max="15"
                  required
                />
              </div>
              <div class="input">
                <span>Last name</span>
                <input
                  type="text"
                  placeholder="Last name"
                  id="lname"
                  name="lname"
                  max="15"
                  required
                />
              </div>
              <div class="input">
                <span>Gender</span>
                <select name="gender" id="gender" required>
                  <option value="" selected disabled hidden>
                    Select an Option
                  </option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>
              <div class="input">
                <span>Age</span>
                <input
                  type="number"
                  placeholder="Age"
                  id="age"
                  name="age"
                  required
                />
              </div>
              <div class="input">
                <span>Email ID</span>
                <input
                  type="email"
                  placeholder="Email-Id"
                  id="email"
                  name="email"
                  required
                />
              </div>
            </div>
          </div>
          <div class="content-2">
            <div class="title">Sign Up</div>
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
              <div class="input">
                <span>Confirm Password</span>
                <input
                  type="password"
                  placeholder="Password"
                  id="cpassword"
                  name="cpassword"
                  required
                />
              </div>
              <div class="input submit">
                <input type="submit" value="Sign Up" name="submitbtn" />
              </div>
              <div class="signUp input">
                <p>
                  Already have an account?
                  <a href="./SignIn.php" class="a">Sign In</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </form>
      
    </main>         
  </body>
</html>
