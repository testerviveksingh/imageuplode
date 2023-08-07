<?php
include("db.php");

if(isset($_POST['submit']))
{
      $Img_name     = $_FILES['image']['name'];
    
      $Img_size     = $_FILES['image']['size'];
      $Img_type     = $_FILES['image']['type'];
      $tmp_name     = $_FILES['image']['tmp_name'];
      $dagisnation  = "assets/uplodes/".$Img_name;
      $extention    = pathinfo($Img_name, PATHINFO_EXTENSION);
      $Img_name =    time().".".$extention;
      $allow_img    = array('jpg','jpeg','png');


      if(in_array($extention,$allow_img)==true)
      {
          $sql="INSERT INTO `images` (image) VALUES ('$Img_name')";
          $query_run= mysqli_query($con,$sql);
    
          if($query_run){
              move_uploaded_file($tmp_name,$dagisnation);
              header("location: index.php");
    
          }else
          {
              echo "File Not Uploded";
          }

      }else 
      {
          echo "Please uplode only jpg,jpeg,png file";
      }   

}
?>