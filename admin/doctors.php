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
      <title>Doctors</title>
</head>
<body>
       <div class="categoryPage">
            <div class="add">
                  <a href="addDoctor.php"><button>Add Doctor</button></a>
            </div>
            <div class="display">
                  <h1>Doctors</h1>
            <?php
                  $sql = "SELECT * FROM doctor";
                  $res = mysqli_query($conn, $sql);
                  $count =  mysqli_num_rows($res); 
                  if($count > 0){
                        while($row = mysqli_fetch_assoc($res)){
                              $name = $row['fname']." ".$row['lname'];
                              $id = $row['docid'];
                              $speciality = $row['speciality'];
                  
                              echo '
                              <div class="doccard">
                              <div class="id">'.$id.'</div>
                              <div class="name">'.$name.'</div>
                              <div class="name">'.$speciality.'</div>
                              <div class="btns"> 
                                    <div class="update"><a href="updateDoc.php?id='.$id.'"><button>Update</button></a></div>
                                    <div class="delete"><a href="deleteDoc.php?id='.$id.'"><button>Delete</button></a></div>
                              </div>
                              </div>
                              ';
                        }
                  } 
            ?>
                  
            </div>
      </div>
</body>
</html>