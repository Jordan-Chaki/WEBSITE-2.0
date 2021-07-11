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
        <script src="validator1.js"></script>
        
    </head>
    <body style="background-color: white;">
    <div class="topnav">
            <a href="contact.html">CONTACT</a>
            <a href="JordanResume.pdf">RESUME</a>
            <a href="login.html">COURSES</a>
            <a href="register.html">REGISTER</a>
            <a href="aboutme.html">ABOUT ME</a>
            <a href="index.html" class="active">HOME</a>
            <div class="profile">
             <span class="iconify" data-inline="false" data-icon="bi:person-circle" style="font-size: 45px; float:left; color:#fff"></span>
             <span>JORDAN CHAKI</span>
            </div>
         </div>
         <div>
           <a href="addacourse.html"> <p class="chaki">Add a Course<p>
           <a href="login.html" ><p class="chaki" >Log Out</p></a>
         </div>
    
<?php 
$connection= mysqli_connect("localhost","root","","action");
  
   if($connection){
       echo "<h3>Welcome Dear, Student.</h3> <br>";

   }
     else{
         die("Connection failed. Reason: ".mysqli_connect_error());
     }
      $sql="SELECT id,course ,courseID , description,department,academic_year,course_instructor,grade FROM course";

      $results=mysqli_query($connection,$sql);

      if(mysqli_num_rows($results)>0){
       
     while($row= mysqli_fetch_array($results)){
      echo "<table class=\"table\">
      <tr>
      <th>No</th>
      <th>Course</th>
      <th>CourseId</th>
      <th>Description</th>
      <th>Department</th>
      <th>Academic Year</th>
      <th>CourseInstructor</th>
      <th>Grade</th>
      
      </tr>";
      echo "<tr>";
      echo "<td>" . $row[0] . "</td>";
      echo "<td>" . $row[1] . "</td>";
      echo "<td>" . $row[2] . "</td>";
      echo "<td>" . $row[3] . "</td>";
      echo "<td>" . $row[4] . "</td>";
      echo "<td>" . $row[5] . "</td>";
      echo "<td>" . $row[6] . "</td>";
      echo "<td>" . $row[7] . "</td>";

      echo "</tr>";
    }
    echo "</table>";
      

     // echo  $row[0]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[1]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[2]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[3]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[4]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[5]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[6]."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".$row[7];

      echo "<br>" ;

      

      

     }
    
    //--testing  my code
    

    //--my code end

     mysqli_close($connection);
   







?>

    </body>
    </html>