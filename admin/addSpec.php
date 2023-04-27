<?php 
      include('./menu.php');

      if (isset($_POST['submit'])) {
           
            $specname = $_POST['specname'];
            $specimg = "";
            if(isset($_FILES['specimg']['name'])){

                  $specimg = $_FILES['specimg']['name'];
                  
                  if($specimg != ""){
                        $temp = explode('.', $specimg);
                        $ext = end($temp);
                        $specimg = $specname.'.'.$ext;

                        $src_path = $_FILES['specimg']['tmp_name'];
                        $dest_path = "../images/specialities/".$specimg;

                        $upload = move_uploaded_file($src_path, $dest_path);

                        if(!$upload){
                              echo "<script>alert('Couldn't upload image');</script>";
                        
                        }
                  }

                  
            }

            $sql = "INSERT INTO speciality (name, img) VALUES ('$specname' , '$specimg')";

            $result = mysqli_query($conn, $sql);

            if(!$result){
                  echo 'Failed to add category';
            }
            else{
                  header("Location:http://localhost/Hospital-Management-System/admin/speciality.php");
      }
      }

      
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="admin.css">
      <title>Speciality</title>
</head>
<body>
    <div class="addCatpage">
      <div><h1>ADD SPECIALITY</h1></div>
      <div class="addForm">
      <form action="addSpec.php" method="post" enctype = "multipart/form-data">
            <div class="name input">
            <input
              type="text"
              name="specname"
              id="specname"
              placeholder="Speciality name"
              required
            />
            </div>

            <div class="">
            <label class="custom-file-upload">
            <input type="file"  name="specimg"/>
            Upload Speciality Image
            </label>
            </div>

            <div class="addbtn"><input type="submit" value="ADD" name="submit" /></div>
      </form>
      </div>
      </div>
</body>
</html>