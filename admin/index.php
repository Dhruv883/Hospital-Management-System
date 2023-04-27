<?php 
      include('menu.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="admin.css">
      <title>Admin</title>
</head>
<body>
      <div class="homecontent">
      <?php 

        $sql = "SELECT * FROM speciality";
        $res = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($res);

        $sql1 = "SELECT * FROM doctor";
        $res1 = mysqli_query($conn, $sql1);
        $count1 = mysqli_num_rows($res1);
        echo '
        <div class="categories card">
        <span>'.$count.'</span>
        <span>Specialities</span>
        </div>
        
        <div class="categories card">
        <span>'.$count1.'</span>
        <span>Doctors</span>
        </div>
        
        <div class="categories card">
        <span>0</span>
        <span>Appointments</span>
      </div>
      ';
      ?>
      </div>
</body>
</html>     