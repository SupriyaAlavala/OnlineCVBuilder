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
$_SESSION['id']=$_POST['userid'];

$id=$_POST['userid'];
$sql="SELECT * FROM person where resume_id='$id'";
$num=$conn->query($sql);
if($num->num_rows > 0)
{
?>
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
  <title>TEMPLATES</title>
  <link rel="icon" href="images/favicon.ico">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Bitter&family=Langar&display=swap" rel="stylesheet">
  <style>
  body{
    font-family: 'Merriweather', serif;
  }
  nav{
  position: fixed;
  }
  hr{
    margin: 0;
  }
  .row{
    margin-top: 20px;
  }
  #col2,#col1{
    margin: auto;
    }
    h2{
      text-align: center;
      margin-top: 30px;
      color: green;
      text-decoration: underline;
      font-weight:

    }
    h3{
      text-align: center;
      margin-top: 20px;
        margin-top: 20px;
      }
      #ba{
        font-size: 30px;
        margin-right: 200px;
      }
      #pr{
        font-size: 30px;
        margin-left: 230px;

      }
      #img1{
        margin: auto;
        margin-top: 30px;
        margin-left: 100px;
        border: orange 2px solid;
        width: 250px;
      }
      #img2{
        margin: auto;
        margin-top: 30px;
        margin-left: 100px;
        width: 250px;
      }
      #img1:hover{
        border: blue 3px solid;
        width:253px;
      }
      #img2:hover{
        border: blue 3px solid;
        width:253px;
      }
    </style>
    <body >
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
  <h2>CHOOSE YOUR TEMPLATE</h2>
  <p> <span  id="ba"></span> <span id="pr"></span> </p>
  <div class="row">
    <div id="col1" class="col col-lg-4">
      <h3>BASIC TEMPLATE</h3>
      <a href="template1.php"> <img id="img1" src="images/temp1.jpg" alt=""> </a>
    </div>
    <div id="col2" class="col col-lg-4">
      <h3>PROFESSIONAL TEMPLATE</h3>
      <a href="template2.php"> <img id="img2" src="images/sample5.png" alt=""> </a>
    </div>
  </div>


  </body>
  </html>

<?php
}
else
{
  echo "<span>INVALID ID</span>";
header("refresh:2; url=finalcv.php");
}

 ?>
