<?php

      include('menu.php');
      if(isset($_GET['id'])){

            $id = $_GET['id'];

            $sql = "DELETE FROM doctor WHERE docid = $id";
            $res = mysqli_query($conn, $sql);

            if(!$res){
                  echo "<script>alert('Couldn't delete doctor');</script>";
            }
      }
      header("Location:http://localhost/Hospital-Management-System/admin/doctors.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="admin.css">
      <title>Delete Speciality</title>
</head>
<body>
      
</body>
</html>