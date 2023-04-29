<?php 
  include('./partials/navbar.php');
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Specialities</title>
    <link rel="stylesheet" href="specialities.css" />
  </head>

  <body>
   

    <!-- -------------------------------------------------------------------------- -->
    <main>

      <?php 
        $sql = "SELECT * FROM  speciality";
        $res = mysqli_query($conn , $sql);
        $count =  mysqli_num_rows($res); 
        if($count > 0){
          while ($row = mysqli_fetch_assoc($res)) {
            $name = $row['name'];
            $img = $row['img'];
            $id = $row['id'];
            echo '
            <div class="spname">
            <a href="doctors.php?id='.$id.'">
            <ul>
            <li><img src="images/specialities/'.$img.'" alt="" /></li>
            <li>'.$name.'</li>
            </ul>
            </a>
            </div>
            ';
            
          }
        }
      ?>
      
    </main>
  </body>
</html>
