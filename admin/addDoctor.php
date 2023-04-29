<?php 
  include('../database.php');

  if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $speciality = $_POST['speciality'];
    $age = $_POST['age'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $description = $_POST['description'];
    $experience = $_POST['experience'];

     $exists = false;
     $usercopy = "SELECT * FROM doctor WHERE username='$username'";
      if (mysqli_num_rows(mysqli_query($conn, $usercopy)) > 0) {
        $exists = true;
        echo "<script>alert('Username Already Exists!');</script>";
      }
      $emailcopy = "SELECT * FROM doctor WHERE email='$email'";
      if (mysqli_num_rows(mysqli_query($conn, $emailcopy)) > 0) {
        $exists = true;
        echo "<script>alert('Email Already Exists!');</script>";
      }
      $spec = "SELECT * FROM speciality WHERE name = '$speciality'";
      if (mysqli_num_rows(mysqli_query($conn, $spec)) <= 0) {
        
        echo "<script>alert('Speciality doesnt Exist!');</script>";
      }else{

        
        if (!$exists) {
          
          $sql = "INSERT INTO doctor (fname, lname, speciality, age, email, username, password, description, experience) VALUES ('$fname', '$lname', '$speciality', $age, '$email', '$username', '$password', '$description', $experience)";
          
          $result = mysqli_query($conn, $sql);
          
          if(!$result){
            echo 'Failed to connect';
          }else{
            header("Location:http://localhost/Hospital-Management-System/admin/doctors.php");
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
    <link rel="stylesheet" href="addDoctor.css" />
    <title>Add Doctor</title>
  </head>
  <body>
    <main>
      <header>
        <a href="index.html"
          ><img src="../images/logo.png" alt="Docplus" /><span class="ocplus"
            >ocplus</span
          ></a
        >
      </header>
      <form action="addDoctor.php" method = "post">
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
                  required
                />
              </div>
              <div class="input">
                <span>Speciality </span>
                <input
                  type="text"
                  placeholder="Speciality"
                  id="speciality"
                  name="speciality"
                  required
                />
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
            <div class="content">
              <div class="input">
                <span>Experience</span>
                <input
                  type="number"
                  placeholder="Experience"
                  id="experience"
                  name="experience"
                  value = "0"
                  min = "0"
                  required
                />
              </div>
              <div class="input">
                <span>Decsription</span>
                <input
                  type="text"
                  placeholder="Description"
                  id="description"
                  name="description"
                  max = "300"
                  required
                />
              </div>
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
                <input type="submit" value="Add Doctor" name="submit" />
              </div>
              <div class="signUp input"></div>
            </div>
          </div>
        </div>
      </form>
    </main>
  </body>
</html>
