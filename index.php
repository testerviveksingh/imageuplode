<!-- 
 if(isset($_POST['submit'])){
 $Image_name=$_FILES['image']['name'];
 $Image_size=$_FILES['image']['size'];
 $Image_type=$_FILES['image']['type'];
$tmp_name=$_FILES['image']['tmp_name'];
$dagisnation="assets/uplodes/".$Image_name;

 move_uploaded_file($tmp_name, $dagisnation);
 } -->


<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>image</title>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
</head>

<body class="bg-info">
     <form action="code_img.php" method="POST" enctype="multipart/form-data">
          <div class="container">
               <h2 class="text-center"><u>Image Uplode</u></h2>
               <div class="row">
                    <div class="col-md-6">
                         <input type="file" name="image"><br>
                         <input type="submit" class="btn btn-danger" name="submit">
                    </div>
               </div>
          </div>
     </form>

     <?php
     include("db.php");
     $query = "SELECT * FROM images";

     $query_run = mysqli_query($con, $query);

     if(mysqli_num_rows($query_run)>0){
          
     while($row = $query_run->fetch_assoc());
     ?>
     <img src="assets/uplodes/" <?php echo $row['image']; ?> width="20%">
     <?php

     }

     ?>

     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

</body>
</html>