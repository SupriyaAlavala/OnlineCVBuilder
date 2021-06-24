<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>FINAL-CV</title>
    <link rel="icon" href="images/favicon.ico">
    <link rel="stylesheet" href="css/styles-final.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css2?family=Merriweather&display=swap" rel="stylesheet">
  </head>
  <style>
  body{
    font-family: 'Merriweather', serif;
    background-image: url("images/genbg.jpg");
    background-repeat: no-repeat;
    background-size: cover;
  }
  .cont{
    background-color: #e4e3e3;
    margin: auto;
    margin-top: 150px;
    margin-bottom: 30px;
    width: 40%;
    font-family: 'Merriweather', serif;
    border-radius: 30px;
  }
  h1{
    text-align: center;
    margin-top: 80px;
    padding-top: 30px;
  }
  h3{
    text-align: center;
    padding: 30px;
    color: red;
    margin-bottom: 30px;
  }
.form-group{
  margin-bottom: 60px;
}

   .form-group label {
   padding-right: 20px;
   padding-left: 100px;
    margin:auto;
    font-size: 25px;
  }
 .form-group input {
    width: 40%;
    padding: 5px;
    border: #ddd 1px solid;
    border-radius: 5px;
    margin: auto;
  }
 #but {
    width:28%;
    background-color: #1b6ca8;
    padding: 6px;
    display: block;
    margin: auto;
    margin-top: 30px;
    color: white;
    cursor: pointer;
    border: 0;
    font-size: 19px;
    margin-bottom: 30px;
  }
 #but:hover {
    background-color: #3d7ea6;
    color:white;
  }
  </style>
  <body>
    <nav class="navbar navbar-light bg-light">
      <a class="navbar-brand" href="#">
        <img src="images/cv.png" width="40" height="40" class="d-inline-block align-top" alt="">
      <span style="font-size:23px; font-weight: bold">Online CV Builder</span>
      </a>
      <form class="form-inline my-2 my-lg-0" style="font-size:18px ">
       <a class="nav-link" href="index.php" style="color:black">HOME</a>
       <a class="nav-link" href="creation.php" style="color:black; margin-right: 20px">BUILD-CV</a>
      </form>
    </nav>


    <div class="cont">
      <h1 style="font-weight:bold">Generate CV</h1>
      <h3>Enter valid details to generate your cv</h3>
      <form class="form" action="template.php" method="post">
        <div class="form-group">
          <label for="userid">Resume_ID</label>
          <input type="text" name="userid" id="userid" maxlength="10">
        </div>
        <button id="but" type="submit" class="btn">Submit</button>
      </form>
      <br> <br>
    </div>


  </body>
</html>
