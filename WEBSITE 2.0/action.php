<?php
 $con = mysqli_connect('localhost','root','','action');

  //getting form data
  $uname = $_POST['uname'];
  $password = $_POST['password'];

  //data base inserting mysql code
   $sql = "INSERT INTO loginp (uname,password) VALUES ('uname','password')";

   //inserting into data base

   

   if(mysqli_query($con, $sql)) {
    echo "Records inserted successfully";
    echo $uname;
    echo $password;
    header("Location: ./new.php");
} else {
    echo "ERROR: Could not execute entry" .mysqli_error($con);
}

mysqli_close($con);
?>
