<?php
session_start();
 ?>
<?php
include 'connect.php';
// check connection
$conn = new mysqli("localhost", "root", "", "cv-builder");
if ($conn->connect_errno) {
    echo "Failed to connect to MySQL: " . $conn->connect_error;
    exit();
}

$id=$_SESSION['id'];

?>

<script>
  alert("YOUR FINAL CV");
</script>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BASIC TEMPLATE</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <script src="https://kit.fontawesome.com/a4f1ec2893.js" crossorigin="anonymous"></script>
        <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
    <script src="js/template1.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Langar&display=swap" rel="stylesheet">
</head>
<style media="screen">

/* BUTTON */
#download{
  margin: auto;
  margin-top: 50px;
  margin-left: 35%;
  margin-bottom: 30px;
  padding:8px;
  font-size: 22px;
  font-weight: bold;
  width:30%;
}
/* ENTIRE BOX */
#invoice{
margin: auto;
border-style: solid;
border-width: thick;
max-width: 90%;
background-color: #f1f1f1;
margin-top: 60px;
margin-bottom: 20px;
font-family: 'Bitter', serif;
}
/* image */
#upimg{
  width: 150px;
  height: 150px;
  margin-top: 30px;
  margin-bottom: 20px;
  margin-left: 43%;
  border-radius: 100%;
  border: black 2px solid;
}
/* person table */
.pi1{
  text-align: center;
  font-family: 'Langar', cursive;
  font-size: 40px;
  padding-top: 20px;
  padding-bottom: 0;
}
.pi2{
  text-align: center;
  font-size: 20px;
}
.pi3{
  text-align: center;
  margin-left: 40px;
}
.pi4{
text-align:center;
margin-left: 40px;
margin-bottom: 20px;
}
/* for all sub-heading */
h2{
  text-align: center;
  margin-top: 40px;
}
/* for hr lines in the page */
hr{
  height:2px;
  background-color: black;
  border: none;
}
/* personel_detials-table */
#pa1{
  text-align: center;
}
#pa2{
  font-size: 18px;
  margin-top: 15px;
  margin-bottom: 20px;
  text-align: center;
  width:95%;
}
/* education-table */
#fontawesome{
  margin-right: 5px;
}
.pe1{
  margin-left: 40px;
}
.pe2{
  text-align: center;
}
.pe3,.pe4{
  margin-left: 30px;
}
nav{
    font-family: 'Merriweather', serif;
}
#download:hover{
  background-color:#61b15a;
}
#sign{
  width: 250px;
  height: 100px;
  margin-left: 260px;
  margin-top: 30px;
  margin-bottom: 20px;

}
</style>

<body>
  <nav class="navbar navbar-light bg-light">
   <a class="navbar-brand" href="#" >
   <img src="images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
   <span style="font-size:23px; font-weight: bold">Online CV Builder</span>
   </a>
   <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
    <a class="nav-link" href="index.php" style="color:black">HOME</a>
    <a class="nav-link" href="finalcv.php" style="color:black">GenerateCV</a>
    <a class="nav-link" href="creation.php" style="color:black; margin-right: 20px">BuildCV</a>
   </form>
   </nav>


  <button class="btn btn-success" id="download"> DOWNLOAD PDF</button>

  <div id="invoice">
    <!-- image -->

    <?php

    $sql0="SELECT filename from image where id='$id'";
    $res0=$conn->query("$sql0");
    if($res0->num_rows>0)
    {
      $row0=$res0->fetch_assoc();
      echo " <img id='upimg' src='uploads/" .$row0['filename'] ."' alt='person photo' width> <br> ";
    }
    else {
      echo "NO IMAGE PRESENT FOR THIS RECORD.";
    }

    ?>



    <!-- person table -->

      <?php
          $sql1="SELECT * from person where resume_id='$id'";
          $res1=$conn->query($sql1);


          $sql8="SELECT * FROM refer WHERE r_id='$id'";
          $res8=$conn->query($sql8);
          $row7=$res8->fetch_assoc();

          if($res1->num_rows >0)
          {
            $row=$res1->fetch_assoc();
              echo "<b><p class='pi1'><span style='padding-left:20px'>" .$row['f_name'] ."</span><span style='padding-left:10px'>" .$row['m_name'] ."</span><span style='padding-left:10px'>" .$row['s_name'] ."</span></p></b>" ;
              echo "<p class='pi2'><span>".$row['email'] ."</span><span style='padding-left:18px'>Linkedin: " .$row7['link'] ."</span><span style='padding-left:30px'>" .$row['ph_no'] ."</span></p>" ;
              echo "<p class='pi3'>" .$row['address'] ."</p>";
              echo "<p class='pi4'>" .$row['objective'] ."</p>" ;

          }
          else{
            echo "NO ROWS SELECTED.";
          }
       ?>

    <!-- personel_details table  -->

    <hr>
    <h2> <U>ABOUT ME: </U> </h2>
    <?php
    $sql9="SELECT * from personel_details where ID='$id'";
    $res9=$conn->query($sql9);

    if($res9->num_rows >0)
    {
        $row8=$res9->fetch_assoc();
        echo "<BR><p id='pa1'><span style='padding-right:25px; '><b  style='padding-right:10px'>DATE_OF_BIRTH:</b>" .$row8['dob'] ."</span><span style='padding-right:25px'><b  style='padding-right:10px;'>NATIONALITY:</b>" .$row8['nationality'] ."</span>";
        if($row8['sex']=='f'){
          echo  "<span><b  style='padding-right:10px; '>GENDER:</b> FEMALE"."</SPAN></p>";
        }
        else if($row8['sex']=='m') {
          echo  "<span><b  style='padding-right:10px; '>GENDER:</b> MALE"."</SPAN></p>";
        }
        else{
          "<span><b  style='padding-right:10px; '>GENDER:</b> Others"."</SPAN></p>";
        }
        echo "<br><h5 STYLE='text-align:center'><b><u>BRIEF INTRODUCTION:</u></b></h5><p id='pa2'>" .$row8['about'] ."</p>";
    }
    else {
      echo "NO ROWS SELECTED.";
    }

     ?>

     <!-- education-table -->
     <hr>
     <h2><u>EDUCATION</u></h2>
      <?php
         $sql2= "SELECT * FROM education where id='$id' ORDER BY start_year";
         $res2 = $conn->query($sql2);
         if($res2 ->num_rows >0)
         {
           echo"<div style='margin-left: 40px; margin-top: 34px;'>";
           while($row1=$res2->fetch_assoc())
           {
             echo "<p class='pe1'><i id='fontawesome' class='fa fa-long-arrow-right fa-2x' aria-hidden='true'></i><b  style='padding-right:15px; padding-left:20px; font-size:19px;'>DEGREE:</b><span style='padding-right:20px; font-size:17px;'>".$row1['grade'] ."</span></p>" ;
             echo "<p class='pe2' style='line-height:1.5'><b style='margin-left: 120px;font-size:18px; '><u>INSTITUTION DETAILS</u> </b><BR> <b style='padding-right:15px ;margin-left: 90px; '> INSITUTION NAME: </b><SPAN style='font-size:17px; '> " .$row1['insti_name'] ."</SPAN><br><b style='padding-right:15px;margin-left: 90px;'> INSITUTION ADDRESS: </b><SPAN style='font-size:17px'>" .$row1['insti_address'] ."</SPAN></p>";
             echo "<p class='pe3'><b  style='padding-right:15px; margin-left: 60px; font-size:19px;'>PERIOD:</b><span style='padding-right:20px'>" .$row1['start_year'] ." - " .$row1['end_year'] ."</span></p>" ;
             echo "<p class='pe4'><b  style='padding-right:15px; margin-left: 60px; font-size:19px;'>PERCENTAGE/CGPA:</b><span style='padding-right:20px'>".$row1['percentage'] ."</span></p>" ;
           }
              echo "</div>";

         }
         else {
               echo "NO EDUCATIONAL DETAILS.";
              }
      ?>


      <!-- work_experience -->
      <hr>
      <h2> <u>WORK EXPERIENCE</u></h2>

      <?php
      $sql3=" SELECT * FROM work_experience where w_id='$id' ORDER BY start_year";
      $res3=$conn->query($sql3);

      if($res3 ->num_rows >0)
      {
        echo "<div style='margin-left: 40px; margin-top: 30px;'>";
        while($row2=$res3->fetch_assoc())
        {
          echo "<p class='pe1'><i id='fontawesome' class='fa fa-long-arrow-right fa-2x' aria-hidden='true'></i><b  style='padding-right:15px; padding-left:20px; font-size:19px;'>COMPANY:</b><span style='padding-right:20px; font-size:17px;'>".$row2['company'] ."</span></p>" ;
          echo "<p class='pe2' style='line-height:1.5'><b style='margin-left: 120px;font-size:18px; '><u>ROLE DETAILS:</u> </b><BR> <b style='padding-right:15px ;margin-left: 90px; '> ROLE NAME: </b><SPAN style='font-size:17px; '> " .$row2['role_name'] ."</SPAN><br><b style='padding-right:15px;margin-left: 90px;'>ROLE DESCRIPTION: </b><SPAN style='font-size:17px'>" .$row2['role_description'] ."</SPAN></p>";
          echo "<p class='pe3'><b  style='padding-right:15px; margin-left: 60px; font-size:19px;'>PERIOD:</b><span style='padding-right:20px'>" .$row2['start_year'] ." - " .$row2['end_year'] ."</span></p>" ;
        }
          echo "</div>";
      }
      else {
            echo "NO Work_Experience Details.";
           }
       ?>


       <!-- skills-table -->
       <hr>
       <h2> <u>SKILLS</u></h2>
         <?php
           $sql4="SELECT * FROM skills where s_id='$id'";
           $res4=$conn->query($sql4);

           if($res4 ->num_rows >0)
           {
             $row3=$res4->fetch_assoc();
              echo "<div style='margin-left: 100px; margin-bottom:20px; margin-top: 30px;'>";
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>LANGUAGES:</b>".$row3['lang_names'] ."</span></p>";
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>SOFT_SKILLS: </b>".$row3['soft_skills'] ."</span></p>" ;
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>TECHNICAL_SKILLS: </b>".$row3['technical_skills'] ."</span></p>" ;
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>COURSES: </b>".$row3['courses'] ."</span></p>";
               echo "</div>";
          }
          else
          {
            echo "NO SKILLS DETAILS.";
          }
        ?>


      <!-- extra_activities -->
      <?php
        $sql5="SELECT * FROM extra_activities WHERE a_id='$id'";
        $res5=$conn->query($sql5);
        if($res5->num_rows > 0)
        {
          echo "<h4 style='text-align:center'><u>EXTRA_ACTIVITIES</u> </h4>";
          echo "<div style='margin-left: 40px; margin-top: 30px; margin-bottom: 30px;'>";
          while($row4=$res5->fetch_assoc())
          {
            echo "<br>";
            echo "<p class='pe1'><i id='fontawesome' class='fa fa-long-arrow-right fa-2x' aria-hidden='true'></i><b  style='padding-right:15px; padding-left:20px; font-size:18px;'>ACTIVITY_CATEGORY:</b><span style='padding-right:20px; font-size:17px;'>" .$row4['activity_category'] ."</span></p>" ;
            echo "<p class='pe3'><b  style='padding-right:15px; margin-left: 60px; font-size:18px;'>ACTIVITY_DETAILS:</b><span style='padding-right:20px'>" .$row4['activity_details'] ."</span></p>" ;
          }
            echo "</div>";
        }
        else
        {
            echo "NO EXTRA_ACTIVITIES DETAILS.";
        }
       ?>

       <!-- achievements -->
       <hr>
       <h2> <u> ACHIEVEMENTS</u></h2>
       <?php
         $sql6="SELECT * FROM achievments where a_id='$id'";
         $res6=$conn->query($sql6);

         if($res6 ->num_rows >0)
         {
           $row5 = $res6->fetch_assoc();
          echo "<div style='margin-left: 100px; margin-bottom:20px; margin-top: 30px;'>";
          echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>CERTIFICATE:</b>".$row5['certificate']  ."</span></p>";
          echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'> AWARDS:</b>" .$row5['award'] ."</span></p>" ;
          echo "</div>";
         }
         else
         {
               echo "NO ACHIEVEMENTS DETAILS.";
         }
      ?>

       <!-- PROJECTS -->

       <?php
       $sql7="SELECT * FROM project WHERE a_id='$id'";
       $res7=$conn->query($sql7);
       if($res7->num_rows)
       {
         echo "<h4 style='text-align:center'><u>PROJECTS</u> </h4>";
         echo "<div style='margin-left: 40px ; margin-bottom: 30px; margin-top: 30px;'>";
         while($row6=$res7->fetch_assoc())
         {
           echo "<br>";
           echo "<p class='pe1'><i id='fontawesome' class='fa fa-long-arrow-right fa-2x' aria-hidden='true'></i><b  style='padding-right:15px; padding-left:20px; font-size:18px;'>PROJECT ID:</b><span style='padding-right:20px; font-size:17px;'>" .$row6['p_no'] ."</span></p>" ;
           echo "<p class='pe3'><b  style='padding-right:15px; margin-left: 60px; font-size:18px;'> PROJECT TITLE:</b><span style='padding-right:20px'>" .$row6['project_name'] ."</span></p>" ;
           echo "<p class='pe3'><b  style='padding-right:15px; margin-left: 60px; font-size:18px;'> PROJECT_DESCRIPTION:</b><span style='padding-right:20px'>" .$row6['project_description'] ."</span></p>" ;
         }
           echo "</div>";
       }
       else
       {
         echo "NO PROJECTS DETAILS.";
       }

        ?>

       <!-- references -->
       <hr>
       <h2> <u>REFERENCES </u></h2>
       <?php

           if($res8->num_rows)
           {

               echo "<div style='margin-left: 100px; margin-bottom:50px; margin-top: 30px;'>";

               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>BLOGS:</b>" .$row7['blog'] ."</span></p>";
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>TWITTER:</b>".$row7['twit'] ."</span></p>";
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>GITHUB:</b>".$row7['github'] ."</span></p>";
               echo "<p class='ps1'><span><i class='fas fa-circle fa-xs'></i><b style='padding-left:6px; padding-right:15px; font-size:18px;'>ADDITIIONAL DETAILS:</b>".$row7['other'] ."</span></p>";
               echo "</div>";
           }
           else
           {
               echo "NO REFERENCE DETAILS.";
           }
      ?>

      <!-- signature -->

      <?php

      $sig="SELECT filename from sign where id='$id'";
      $sige=$conn->query("$sig");
      if($sige->num_rows>0)
      {
        $row8=$sige->fetch_assoc();
        echo " <img id='sign' src='signs/" .$row8['filename'] ."' alt='Signature photo' width> <br> ";
      }
      else {
        echo "NO Signature PRESENT FOR THIS RECORD.";
      }

      ?>

  </div>

</body>

</html>
