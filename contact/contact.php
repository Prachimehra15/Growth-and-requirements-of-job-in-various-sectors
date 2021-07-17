<?php
$servername ="localhost";
$username ="root";
$password ="";
$database ="contact";
  $con = mysqli_connect('localhost','root','','contact');

  $name=$_POST['name'];
  $email=$_POST['email'];
  $comments=$_POST['comments'];
  

  $sql="INSERT  INTO `info`(`name`,`email`,`comments`)VALUES
  ('$name','$email','$comments')";
  $rs=mysqli_query($con,$sql);
  if($rs)
  {
      echo "inserted";
     }
 ?>
