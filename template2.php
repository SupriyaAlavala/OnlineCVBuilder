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
     <title>PROFESSIONAL TEMPLATE</title>
     <link rel="icon" href="images/favicon.ico">
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" crossorigin="anonymous">
         <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
         <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
         <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
         <script src="https://kit.fontawesome.com/a4f1ec2893.js" crossorigin="anonymous"></script>
         <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
     <script src="js/template2.js"></script>
     <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.2/html2pdf.bundle.js"></script>
     <link rel="preconnect" href="https://fonts.gstatic.com">
     <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Langar&display=swap" rel="stylesheet">
		 <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
 </head>
 <style>
 nav{
     font-family: 'Merriweather', serif;
 }
 /* button */
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
 #download:hover{
   background-color:#61b15a;
 }
/* entire box */
#invoice{
margin: auto;
max-width: 100%;
margin-top: 30px;
margin-bottom: 20px;
font-family: 'Bitter', serif;
}
/* hr */
hr{
	width:80%;
	height: 2px;
	background-color: #b2deec;
}
h4{
	font-weight: bold;
}
/* image */
#upimg{
  width: 130px;
  height: 130px;
  margin-bottom: 20px;
  margin-left: 43%;
  border-radius: 100%;
  border: black 2px solid;
}
/* intro */
.row{
	margin-bottom: 45px;
}
.col1{
	text-align: left;
	margin: auto;
	margin-left: 30px;
	padding-top: 15px;
	padding-bottom: 10px;
}
.col2{
	text-align: right;
	margin: auto;
	margin-right: 30px;
	padding-bottom: 5px;
	font-size: 18px;
}
.pi1{
	font-size: 32px;
	font-weight: bolder;
	font-family: 'Playfair Display', serif;
}
.pi2{
	text-align: center;
	font-size: 24px;
}
.line{
	width: 100%;
	height: 5px;
	background-color: #0278ae;
	margin-bottom: 40px;
}
/* about */
#pa1{
	text-align: left;
	margin-left: 100px;
	margin-right: 10px;
	margin-bottom: 45px;
	width: 90%;
	font-size: 18px;
}
/* education */
#row1{
	margin-left: 80px;
	margin-top: 10px;
	margin-bottom: 30px;
}
.col3
{
	text-align: center;
}
.col4 {
	padding-left: 30px;
	padding-right: 30px
}

/* signature */
#sign{
  width: 250px;
  height: 100px;
  margin-left: 260px;
  margin-top: 30px;
  margin-bottom: 20px;
}
.line2{
	height: 2px;
	width:100%;
	background-color: black;
}
.line3{
	height:20px;
	width:100%;
	background-color: #0278ae;
	margin-bottom: 40px;
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

    <!-- pdf generate button -->
    <button class="btn btn-success" id="download"> DOWNLOAD PDF</button>
		<div class="line2">
		</div>

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

			<!-- introduction -->
			<?php
			$sql1="SELECT * from person where resume_id='$id'";
			$res1=$conn->query($sql1);

			// reference table
			$sql8="SELECT * FROM refer WHERE r_id='$id'";
			$res8=$conn->query($sql8);
			$row7=$res8->fetch_assoc();

			if($res1->num_rows >0)
			{
				$row=$res1->fetch_assoc();
				echo "<div class='row'><div class='col1 col-lg-4'>" ."<b><p class='pi1'><span style='padding-left:5px'>" .$row['f_name'] ."</span><span style='padding-left:5px'>" .$row['m_name'] ."</span><span style='padding-left:5px'>" .$row['s_name'] ."</span></p></b>";
				echo "<p class='pi2'>" .$row['objective'] ."</p></div>";
				echo "<div class='col2 col-lg-5'><i class='fas fa-envelope fa-sm' style='padding-right:5px'></i>" .$row['email'] ."<br><i class='fab fa-linkedin fa-sm' style='padding-right:7px'></i>" .$row7['link'] ."<br><i class='fas fa-phone-alt fa-sm' style='padding-right:7px'></i>" .$row['ph_no'];
				echo "</div></div>";
			}
			else
			{
				echo "NO DATA present.";
			}
			 ?>


			 <div class="line">
			 </div>


			 <!-- about -->
			 <h4 style="padding-left:90px"> SHORT ASIDE </h4>
			 <hr>

			 <?php
			 $sql9="SELECT * from personel_details where ID='$id'";
	     $res9=$conn->query($sql9);

			 if($res9->num_rows >0)
	     {
				 $row8=$res9->fetch_assoc();
				 echo "<p id='pa1'>" .$row8['about'] ."</p>";
			 }
			 else
			 {
				 	echo "NO DATA present.";
			 }
			  ?>

			<!-- education -->
			<h4 style="padding-left:90px"> EDUCATION HISTORY </h4>
			<hr>
			<?php
			$sql2= "SELECT * FROM education where id='$id' ORDER BY start_year";
			$res2 = $conn->query($sql2);

			if($res2 ->num_rows >0)
			{
				while($row1=$res2->fetch_assoc())
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>" .$row1['start_year'] ."</span>-<span>" .$row1['end_year'] ."</span></div>";
					echo "<div class='col4 col-lg-6'>" .$row1['grade'] ."<br>" .$row1['insti_name'] ."<br>" .$row1['insti_address'] ."<br><span style='padding-right:5px'>SCORE:</span>" .$row1['percentage'] ."</div></div>";
				}
			}
			else
			{
					echo "NO DATA present.";
			}
			 ?>

			 <!-- work_experience -->
			 <h4 style="padding-left:90px"> EMPLOYMENT HISTORY </h4>
 			<hr>
			<?php
			$sql3=" SELECT * FROM work_experience where w_id='$id' ORDER BY start_year";
      $res3=$conn->query($sql3);
			if($res3 ->num_rows >0)
			{
				while($row2=$res3->fetch_assoc())
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>" .$row2['start_year'] ."</span>-<span>" .$row2['end_year'] ."</span></div>";
					echo "<div class='col4 col-lg-6'>" .$row2['company'] ."<br>" .$row2['role_name'] ."<br>" .$row2['role_description'] ."</div></div>";
				}
			}
			else
			{
				echo "NO DATA present.";
			}
			 ?>


			 <!-- projects -->
			 <h4 style="padding-left:90px"> PROJECT WORK </h4>
 			<hr>
			 <?php
			 $sql7="SELECT * FROM project WHERE a_id='$id'";
			 $res7=$conn->query($sql7);
			 if($res7->num_rows)
			 {
				 while($row6=$res7->fetch_assoc())
				 {
					 echo "<div id='row1' class='row'><div class='col3 col-lg-3'> " .$row6['p_no'] ."</div>";
 					echo "<div class='col4 col-lg-6'>" .$row6['project_name'] ."<br><span> " .$row6['project_description'] ." </span></div></div>";
				 }
			 }
			 else
			 {
			 	echo "NO DATA present.";
			 }



			  ?>
			 <!-- relevant skills -->
			 <h4 style="padding-left:90px"> RELAVANT SKILLS </h4>
 			<hr>
			<?php
			$sql4="SELECT * FROM skills where s_id='$id'";
			$res4=$conn->query($sql4);
			if($res4 ->num_rows >0)
			{
				$row3=$res4->fetch_assoc();
				if($row3['soft_skills'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>SOFT-SKILLS:  </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row3['soft_skills'] ." </span></div></div>";
				}
				if($row3['technical_skills'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>TECHNICAL-SKILLS:  </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row3['technical_skills'] ." </span></div></div>";
				}
			  if($row3['courses'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span> COURSES: </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row3['courses'] ." </span></div></div>";
				}
		  }
			else
			{
				echo "NO DATA present.";
			}
			 ?>

			 ?>

			 <!-- additional information -->
			 <h4 style="padding-left:90px"> ADDITIIONAL INFORMATION </h4>
 			<hr>
			<?php
			$sql5="SELECT * FROM extra_activities WHERE a_id='$id'";
			$res5=$conn->query($sql5);
			if($res5->num_rows > 0)
			{
				$text=explode(" ",$row3['lang_names']);
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span> LANGUAGES-SPOKEN: </span></div>";
					echo "<div class='col4 col-lg-6'><span>";
				foreach($text as $re)
				{
    			echo $re, '<br>';
				}
				  echo "</span></div></div>";
				while($row4=$res5->fetch_assoc())
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span> CATEGORY: </span></div>";
					echo "<div class='col4 col-lg-6'>" .$row4['activity_category'] ."<br><br><span> " .$row4['activity_details'] ." </span></div></div>";
				}

			}
			else
			{
				echo "NO DATA present.";
			}


			 ?>

			 <!-- reference -->
			 <h4 style="padding-left:90px"> REFERENCES </h4>
 			<hr>
			<?php
			if($res8->num_rows)
			{
				if($row7['blog'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>BLOGS:  </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row7['blog'] ." </span></div></div>";
				}
				if($row7['twit'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>TWITTER:  </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row7['twit'] ." </span></div></div>";
				}
				if($row7['github'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>GITHUB:  </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row7['github'] ." </span></div></div>";
				}
				if($row7['other'] != NULL)
				{
					echo "<div id='row1' class='row'><div class='col3 col-lg-3'> <span>OTHERS:  </span></div>";
					echo "<div class='col4 col-lg-6'><span> " .$row7['other'] ." </span></div></div>";
				}
			}
			else
			{
				echo "NO DATA present.";
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
			<div class="line3">
			</div>
    </div>

 </body>
 </html>
