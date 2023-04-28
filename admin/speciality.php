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
      <title>Document</title>
</head>
<body>
       <div class="categoryPage">
            <div class="add">
                  <a href="addSpec.php"><button>Add Speciality</button></a>
            </div>
            <div class="display">
                  <h1>Specialities</h1>
            <?php
                  $sql = "SELECT * FROM speciality";
                  $res = mysqli_query($conn, $sql);
                  $count =  mysqli_num_rows($res); 
                  if($count > 0){
                        while($row = mysqli_fetch_assoc($res)){
                              $name = $row['name'];
                              $id = $row['id'];
                              $img = $row['img'];
                  
                              echo '
                              <div class="catcard">
                              <div class="id">'.$id.'</div>
                              <div class="img"><img src="../images/specialities/'.$img.'" alt="'.$name.'" srcset=""></div>
                              <div class="name">'.$name.'</div>
                              <div class="btns"> 
                                    <div class="update"><a href="updateSpec.php?id='.$id.'&img='.$img.'&name='.$name.'"><button>Update</button></a></div>
                                    <div class="delete"><a href="deleteSpec.php?id='.$id.'&img='.$img.'"><button>Delete</button></a></div>
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