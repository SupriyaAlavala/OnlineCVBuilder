<?php
include 'connect.php';
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}
$rid="sup_admin_hasya";
$rpass="mar22ANDjul14";
$fid=$_POST['adid'];
$fpass=$_POST['adpass'];

if(isset($_POST['admin']))
{
  if(($fid==$rid) && ($rpass==$fpass))
  {
   ?>
   <script>
     alert("WELCOME ADMIN!!");
   </script>

   <!DOCTYPE html>
   <html lang="en" dir="ltr">
     <head>
       <meta charset="utf-8">
       <title>ADMIN PAGE</title>
       <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
       <link rel="icon" href="images/favicon.ico">
       <link rel="preconnect" href="https://fonts.gstatic.com">
       <link rel="icon" href="images/favicon.ico">
<link href="https://fonts.googleapis.com/css2?family=Langar&family=Merriweather:wght@300&display=swap" rel="stylesheet">
     </head>
     <style>
     nav{
       position: fixed;
       font-family: 'Merriweather', serif;
     }
     hr{
       margin: 0;
     }
     #admin{
       font-family: 'Merriweather', serif;
       text-align: center;
     }
     #admin th{
       background-color: #adce74;
     }
     #admin td,#admin th{
       border: 1px solid #ddd;
       padding: 8px;
     }
     #pa1{
       text-align:center;
       margin-top:50px;
        font-size: 35px;
        font-family: 'Langar', cursive;
        text-decoration: underline;
     }
     #pa2{
       text-align:center;
       margin-top:50px;
        font-size: 35px;
        font-family: 'Langar', cursive;
        text-decoration: underline;
     }
     #tab2{
       font-family: 'Merriweather', serif;
       text-align: center;
       width:97%;

     }
     #tab2 th
     {
        background-color: #ff9d72;

     }
     #tab2 td,#tab2 th{
       border: 1px solid #ddd;
       padding: 2px;
     }
     </style>
     <body>
       <nav class="navbar navbar-light bg-light ">
         <a class="navbar-brand" href="#">
           <img src="images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
           <span style="font-size:23px; font-weight: bold">Online CV Builder</span>
         </a>
         <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
          <a class="nav-link" href="index.php" style="color:black; margin-right: 30px">HOME</a>
         </form>
       </nav>
       <hr>
       <!-- admin table -->
       <?php

       echo "<p id='pa1' >REGISTERED USERS </p>";
       echo "<table id='admin' style='width:70%; margin:auto; margin-top:70px;'><tr style='font-size:20px; font-weight:bold;'><th> USER_ID </th><th> FIRST NAME </th><th>
       SURNAME</th><th>EMAIL </th></tr> ";

       $sql1="SELECT * FROM admin";
       $res1=$conn->query($sql1);


       while($row=$res1->fetch_assoc())
       {
         echo"<tr><td>" .$row['user_id'] ."</td><td>" .$row['f_name'] ."</td><td>" .$row['s_name'] ."</td><td>" .$row['email'] ."</td></tr>";
       }

       echo "</table>";
       echo "<p id='pa2' > USERS AND THEIR RESUMES </p>";
       echo "<table id='tab2' style=' margin:auto; margin-top:70px; margin-bottom: 50px;'><tr style='font-size:20px; font-weight:bold;'><th> USER_ID </th><th> RESUME_ID </th><th>
       First_Name</th><th>Middle_Name</th><th>Sur_Name</th><th>Address</th><th>Ph_No</th><th>Email</th><th>Objective</th></tr>";

       $per="CALL `personjoinadmin`();";
       $fet=$conn->query($per);


       while($row1=$fet->fetch_assoc())
       {
         echo"<tr><td>" .$row1['user_id'] ."</td><td>" .$row1['resume_id'] ."</td><td>" .$row1['f_name'] ."</td><td>" .$row1['m_name'] ."</td><td>" .$row1['s_name'] ."</td><td>"  .$row1['address'] ."</td><td>" .$row1['ph_no']
          ."</td><td>" .$row1['email']  ."</td><td>" .$row1['objective']."</td></tr>";
       }

       echo "</table>";


         ?>
     </body>
   </html>

   <?php
  }
  else
  {
    ?>
    <script>
      alert("Invalid admin details.");
    </script>
    <?php
    header("refresh:0,url=index.php");
  }
}

 ?>
