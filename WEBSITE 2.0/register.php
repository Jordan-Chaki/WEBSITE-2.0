<?php
   if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fname = $_POST["fname"];
    $mname = $_POST["mname"];
    $lname = $_POST["lname"];
    $uname = $_POST["uname"];
    $email = $_POST["email"];
    // $resume = $_POST["resume"];
    $password = $_POST["password"];
    $telno = $_POST["telno"];
    $tsapno = $_POST["tsapno"];
    $instagram = $_POST["instagram"];
    $twitter = $_POST["twitter"];
    $linkedin = $_POST["linkedin"];

    $connection = mysqli_connect('localhost','root','','action');
     
        $resume = $_FILES['resume']['name'];
        $file_loc = $_FILES['resume']['tmp_name'];
        $folder = "files";
       
    
   
    if (move_uploaded_file($file_loc, $folder.$resume)) {

    $query = " INSERT INTO users (fname ,mname , lname , uname ,email ,resume ,password, telno , tsapno ,
                 instagram ,twitter,linkedin )  
                 VALUES ('$fname',' $mname',  '$lname' , '$uname' , '$email','$resume', '$password', '$telno','$tsapno','$instagram','$twitter','$linkedin')";

    $insertingData = mysqli_query($connection, $query); 
    
    if (!$insertingData) {
        echo "Error in Inserting Data in the Database ";
    } else {

        header("Location:login.html ");
    }
               
    }

}

    
 ?>