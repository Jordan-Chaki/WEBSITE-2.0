<!DOCTYPE html>
<html lang="">
    <head>
        <title>MyProfile</title>
        <meta charset="UTF-8">
        <meta name="author" author="JORDAN CHAKI">
        <meta name="description" content="JORDAN CHAKI A dedicated youth who's primary Goal is the provision of quality and voguish professional digital services">
        <meta name="copyright" content="JORDANCHAKI" >
        <meta name="keywords" content="JORDANCHAKI">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="main.css">
        <script src="https://code.iconify.design/1/1.0.6/iconify.min.js"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="topnav">
           <a href="contact.html">CONTACT</a>
           <a href="JordanResume.pdf">RESUME</a>
           <a href="course.html">COURSES</a>
           <a href="register.html">REGISTER</a>
           <a href="aboutme.html">ABOUT ME</a>
           <a href="index.html" class="active">HOME</a>
           <div class="profile">
            <span>JORDAN CHAKI</span>
           </div>
        </div>





<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $course = $_POST["course"];
    $courseID= $_POST["courseID"];
    $description= $_POST["description"];
    $department = $_POST["department"];
    $academic_year = $_POST["academic_year"];
    $course_instructor = $_POST["course_instructor"];
    $grade = $_POST["grade"];

    $connection = mysqli_connect('localhost','root','','action');
    

    
    $query = " INSERT INTO course (course ,courseID , description , department , academic_year , course_instructor , grade ) 
     VALUES ('$course',' $courseID',  '$description' , '$department','$academic_year','$course_instructor','$grade')";

    $insertingData = mysqli_query($connection, $query);

    if (!$insertingData) {
        echo "can not insert data to db ";
    } else {

        header("Location: new.php");
    }
}




?>
</body>
</html>
