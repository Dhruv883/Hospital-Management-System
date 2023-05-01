<?php

      include('menu.php');
      if (isset($_POST['submit'])) {
            $newspec = $_POST['specname'];
            $id = $_POST['catid'];
            $specimg = "";

            $sql = "SELECT img FROM speciality WHERE id = $id";
            $res = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($res);
            $img = $row['img'];

            if(isset($_FILES['specimg']['name'])){

                  $path = "../images/specialities/$img";
                  $remove = unlink($path);

                  $specimg = $_FILES['specimg']['name'];
                  
                  if($specimg != ""){
                        $temp = explode('.', $specimg);
                        $ext = end($temp);
                        $specimg = $newspec.'.'.$ext;

                        $src_path = $_FILES['catimg']['tmp_name'];
                        $dest_path = "../images/specialities/".$specimg;

                        $upload = move_uploaded_file($src_path, $dest_path);

                        if(!$upload){
                              echo "<script>alert('Couldn't upload image');</script>";
                        
                        }
                  }

                  
            }else{
                  $specimg = $row['img'];
            }

            $sql1 = "UPDATE speciality SET name = '$newspec', img = '$specimg' WHERE  id = $id";
            $res1 = mysqli_query($conn, $sql1);

            header("Location:http://localhost/Hospital-Management-System/admin/speciality.php");
      }
      // die();
?>

<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="admin.css">
      <title>Update Category</title>
</head>
<body>
      <div class="addCatpage">
      <div><h1>UPDATE CATEGORY</h1></div>
      <div class="addForm">
      <form action="updateSpec.php" method="post" enctype = "multipart/form-data">
            <div class="name input">
            <input
              type="text"
              name="specname"
              id="specname"
              placeholder="New Speciality name"
              required
            />
            </div>
            <div class="name input">
            <input
              type="hidden"
              
            />
            </div>

            <div class="">
            <label class="custom-file-upload">
            <input type="file"  name="specimg"/>
            Upload Speciality Image
            </label>
            </div>

            <div class="name input">
            <input
              type="hidden"
              
            />
            </div>
            <input type="hidden" name="catid" id="catid" class="hidden" value="<?php echo $_GET['id']; ?>">
            <div class="addbtn"><input type="submit" value="Update" name="submit" /></div>
      </form>
      </div>
      </div>
</body>
</html>